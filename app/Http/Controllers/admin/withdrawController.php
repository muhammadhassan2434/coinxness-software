<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Withdrawl;
use Illuminate\Http\Request;

class withdrawController extends Controller
{
    public function index(){
        $requests = Withdrawl::where('status', 'pending')->get();
        return view('admin.withdrawrequests.index', compact('requests'));
    }

    public function approve($id){
        $request = Withdrawl::find($id);
        $request->status = 'approved';
        $request->save();
        return redirect()->back();
    }
}
