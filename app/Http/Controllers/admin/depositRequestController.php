<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;

class depositRequestController extends Controller
{
    public function index(){
        $requests = Deposit::where('status', 'pending')->get();
        return view('admin.depositRequest.index',compact('requests'));
    }

    public function approve($id){
        $request = Deposit::find($id);
        $request->status = 'approved';
        $request->save();
        return redirect()->back();
    }

    public function approved(){
        $withdraws = Deposit::where('status', 'approved')->get();

        return view('admin.depositRequest.approvedDeposit', compact('withdraws'));
    }
}
