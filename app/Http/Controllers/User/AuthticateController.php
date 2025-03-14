<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthticateController extends Controller
{
    public function login(){
        return view('user.auth.login');
    }

    public function auth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email', 
            'password' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('user.dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('user.login');
    }
}
