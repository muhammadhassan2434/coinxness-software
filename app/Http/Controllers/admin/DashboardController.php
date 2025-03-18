<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = User::where('role','user')->count();
        $totalCapital = User::sum('capital');
        $totalProfit = User::sum('profit');
        $totalBalance = User::sum('balance');
        return view('admin.dashboard.dashboard',compact('users','totalCapital','totalProfit','totalBalance'));
    }
}
