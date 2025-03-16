<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class authController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function auth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email', // Ensure it's a valid email
            'password' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            if(Auth::user()->role === 'admin'){

                return redirect()->route('dashboard.index');
            }else{
                
                return redirect()->route('admin.login')->with('unauthorize access');
            }

        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }


    public function forget(){
        return view('admin.auth.forgetpassword');
    }

    public function submitForgotPassword(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|exists:users,email',
        'password' => 'required|min:6|confirmed', // New password with confirmation
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator->errors())->withInput();
    }

    // Find the user and update the password
    $user = User::where('email', $request->email)->first();
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->route('admin.login')->with('success', 'Password updated successfully. You can now log in.');
}
    
}
