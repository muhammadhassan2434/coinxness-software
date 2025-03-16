<?php

use App\Http\Controllers\admin\authController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserContoller;
use App\Http\Controllers\user\AuthticateController;
use App\Http\Controllers\User\homeController;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Http\Middleware\userAuthMiddleware;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// admin auth
Route::get('admin/login', [authController::class, 'login'])->name('admin.login');
Route::post('admin/login', [authController::class, 'auth'])->name('admin.auth');
Route::get('admin/logout', [authController::class, 'logout'])->name('admin.logout');


// user auth
Route::get('user/login', [AuthticateController::class, 'login'])->name('user.login');
Route::post('user/login', [AuthticateController::class, 'auth'])->name('user.auth');
Route::get('user/logout', [AuthticateController::class, 'logout'])->name('user.logout');


// admin routes
Route::middleware(AdminAuthMiddleware::class)->group(function () {
    
    // dashboard routes
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    
    // user routes
    Route::get('all/users', [UserContoller::class, 'index'])->name('user.index');
    Route::get('create/user', [UserContoller::class, 'create'])->name('user.create');
    Route::post('user/store', [UserContoller::class, 'store'])->name('user.store');
    Route::get('edit/user/{id}', [UserContoller::class, 'edit'])->name('user.edit');
    Route::put('user/update/{id}', [UserContoller::class, 'update'])->name('user.update');
    Route::delete('user/destroy/{id}', [UserContoller::class, 'destroy'])->name('user.destroy');
    Route::put('/user/update-profit/{id}', [UserContoller::class, 'updateProfit'])->name('user.update-profit');
    Route::put('/user/update-loss/{id}', [UserContoller::class, 'updateLoss']);
});


Route::middleware(userAuthMiddleware::class)->group(function () {
    // user routes
    Route::get('user/account', [homeController::class, 'index'])->name('user.account');

    // account 
    Route::get('user/withdraw', [homeController::class, 'withdraw'])->name('user.withdraw');
    Route::post('request/withdraw', [homeController::class, 'requestWithdraw'])->name('request.withdraw');
});
