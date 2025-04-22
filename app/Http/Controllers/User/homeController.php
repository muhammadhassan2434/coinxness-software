<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ledger;
use App\Models\Withdrawl;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class homeController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        // dd($user);

        $earned =  $user->profit;


        $withdrawls = Withdrawl::where('user_id', $user->id)->where('status', 'approved')->get();
        $withdrawl = $withdrawls->sum('amount');

        $todayProfit = Ledger::where('user_id', $user->id)
            ->whereDate('created_at', Carbon::today())
            ->sum('profit');

        return view('user.home', compact('user', 'earned', 'withdrawl', 'todayProfit'));
    }


    public function withdraw()
    {

        $user = Auth::user();
        $withdrawl = Withdrawl::where('user_id', $user->id)->where('status', 'pending')->get();

        $withdrawls = $withdrawl->sum('amount');

        return view('user.withdraw.index', compact('withdrawls'));
    }

    public function requestWithdraw(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();

        DB::beginTransaction();
        try {
            if ($user->balance < $request->amount) {
                return redirect()->back()->with('error', 'Insufficient balance');
            }

            $user->balance -= $request->amount;
            $user->save();

            $withdraw = new Withdrawl();
            $withdraw->user_id = $user->id;
            $withdraw->amount = $request->amount;
            $withdraw->save();

            DB::commit();
            return redirect()->back()->with('success', 'Withdrawal request sent successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }


    public function transactions()
    {
        $user = Auth::user();
        $transactions = Withdrawl::where('user_id', $user->id)->where('status', 'approved')->with('user')->get();

        return view('user.transactions.index', compact('transactions'));
    }
    public function ledgerHistory(Request $request)
    {
        $user = Auth::user();

        // Get the from and to dates from the request
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');

        // Get Withdrawals first (date-wise)
        $withdrawals = Withdrawl::where('user_id', $user->id)
            ->when($fromDate && $toDate, function ($query) use ($fromDate, $toDate) {
                return $query->whereBetween('created_at', [$fromDate, $toDate]);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        // Get Ledger entries after withdrawals
        $ledgerQuery = Ledger::where('user_id', $user->id);
        if ($fromDate && $toDate) {
            $ledgerQuery->whereBetween('date', [$fromDate, $toDate]);
        }
        $ledger = $ledgerQuery->orderBy('date', 'asc')->get();

        // Merge and sort unique dates (Withdrawals first)
        $dates = $withdrawals->pluck('created_at')->map(fn($date) => $date->toDateString())
            ->merge($ledger->pluck('date'))
            ->unique()
            ->sort();

        $previousBalance = 0;
        $transactions = [];

        foreach ($dates as $date) {
            // Get Withdrawals for the date
            $withdraw = $withdrawals->where('created_at', '>=', $date . ' 00:00:00')
                ->where('created_at', '<=', $date . ' 23:59:59')
                ->sum('amount');

            // Get Profit Earned for the date
            $profit = $ledger->where('date', $date)->sum('profit');

            // Original balance before profit and withdrawals
            $originalBalance = $ledger->where('date', $date)->sum('balance');

            // Calculate New Balance: Previous Balance - Withdrawals + Current Day Profit
            $newBalance = ($previousBalance ?: $originalBalance) - $withdraw + $profit;

            // Save transaction data
            $transactions[] = [
                'date' => $date,
                'withdraw' => $withdraw,
                'profit' => $profit,
                'balance' => $newBalance
            ];

            // Update previous balance for next iteration (profit added after withdrawal deduction)
            $previousBalance = $newBalance;
        }

        // Calculate totals
        $totalProfit = $ledger->sum('profit');
        $totalWithdrawals = $withdrawals->sum('amount');
        $totalBalance = $previousBalance; // Final calculated balance

        return view('user.transactions.ledgerhistory', compact(
            'transactions',
            'totalProfit',
            'totalBalance',
            'totalWithdrawals',
            'fromDate',
            'toDate'
        ));
    }
}
