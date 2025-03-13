<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Withdrawl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class homeController extends Controller
{
    public function index(){

        $user = Auth::user();

        $earned = $user->balance - $user->capital;

        $withdrawls = Withdrawl::where('user_id', $user->id)->where('status', 'approved')->get();

        $withdrawl = $withdrawls->sum('amount');

        return view('user.home', compact('user','earned','withdrawl'));
    }


    public function withdraw(){

        $user = Auth::user();
        $withdrawl = Withdrawl::where('user_id', $user->id)->where('status', 'pending')->get();

        $withdrawls = $withdrawl->sum('amount');

        return view('user.withdraw.index',compact('withdrawls'));
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
    
}
