<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class depositController extends Controller
{
    public function index()
    {
        return view('user.deposit.index');
    }

    public function deposit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'payment_method' => 'required',
            'name' => 'required',
            'account_number' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $deposit = new Deposit();
        $deposit->user_id = Auth::user()->id;
        $deposit->payment_method = $request->payment_method;
        $deposit->bank_name = $request->bank_name;
        $deposit->name = $request->name;
        $deposit->account_number = $request->account_number;
        $deposit->status = 'pending';
        $deposit->save();

        $deposit_id = $deposit->id;

        return redirect()->route('deposit.admininfo',['deposit_id' => $deposit_id]);
    }


    public function admininfo($deposit_id)
    {
        return view('user.deposit.admininfo', compact('deposit_id'));
    }
    

    public function uploadscreenshoot(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'payment_screenshot' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }


        $deposit = Deposit::find($request->deposit_id);
        if (!$deposit) {
            return redirect()->back()->with('error', 'Deposit record not found.');
        }

        if ($request->hasFile('payment_screenshot')) {
            $file = $request->file('payment_screenshot');
            $filename = 'screenshot_' . time() . '.' . $file->getClientOriginalExtension();
            $filepath = 'uploads/screenshots/';

            $file->move(public_path($filepath), $filename);

            $deposit->payment_screenshot = $filepath . $filename;
            $deposit->save();
        }

        return redirect()->route('user.deposit');
    }

   

}
