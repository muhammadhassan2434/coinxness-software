<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserContoller extends Controller
{
    public function index()
    {
        $users = User::where('role','user')->paginate(10);
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'balance' => 'required',
            'capital' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->capital = $request->capital;
        // $user->role = $request->role;
        $user->balance = $request->balance;
        $user->save();


        return redirect()->route('user.index')->with('success', 'User created successfully');
    }


    public function edit($id){
        $user = User::find($id);
         return view('admin.users.edit',compact('user'));
    }
    public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'balance' => 'required',
        'capital' => 'required'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator->errors())->withInput();
    }

    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->email = $request->email;
    
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }
    
    $user->capital = $request->capital;
    $user->balance = $request->balance;
    $user->save();

    return redirect()->route('user.index')->with('success', 'User updated successfully');
}



    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User created successfully');
    }

    public function updateProfit(Request $request, $id)
    {
        $request->validate([
            'profit' => 'required|numeric',
        ]);
    
        $user = User::findOrFail($id);
        $user->profit += $request->profit; // Add profit to existing value
        $user->balance += $request->profit; // Also update balance accordingly
        $user->save();
    
        return response()->json(['message' => 'Profit added successfully!']);
    }
    
    public function updateLoss(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->loss += $request->input('loss');
    $user->balance -= $request->loss;
    $user->save();

    return response()->json(['message' => 'Loss updated successfully']);
}

}
