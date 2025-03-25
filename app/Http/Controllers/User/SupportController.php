<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Jobs\SupportJob;
use App\Mail\supportEmail;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SupportController extends Controller
{
    public function index(){
        return view('user.support.index');
    }


    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $support = new Support();
        $support->name = $request->name;
        $support->email = $request->email;
        $support->message = $request->message;
        $support->save();

        dispatch(new SupportJob($support->name, $support->email, $support->message));


        return redirect()->route('welcome');
    }


    public function adminPage(){
        $support = Support::all();
        return view('admin.support.index',compact('support'));
    }

    public function show($id){
        $support = Support::find($id);
        return view('admin.support.detail',compact('support'));
    }
}
