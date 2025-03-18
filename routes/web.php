<?php

use App\Http\Controllers\admin\authController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\depositRequestController;
use App\Http\Controllers\admin\UserContoller;
use App\Http\Controllers\admin\withdrawController;
use App\Http\Controllers\user\AuthticateController;
use App\Http\Controllers\User\depositController;
use App\Http\Controllers\User\homeController;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Http\Middleware\userAuthMiddleware;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// admin auth
Route::get('admin/login', [authController::class, 'login'])->name('admin.login');
Route::post('admin/login', [authController::class, 'auth'])->name('admin.auth');
Route::get('admin/logout', [authController::class, 'logout'])->name('admin.logout');
Route::get('admin/forget/password', [authController::class, 'forget'])->name('admin.forget');
Route::post('forgot-password', [authController::class, 'submitForgotPassword'])->name('admin.forgot_password.submit');


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
    
    
    // withdraws requests
    Route::get('withdraw/requests', [withdrawController::class, 'index'])->name('all.withdraw.requests');
    Route::get('withdraw/approve/{id}', [withdrawController::class, 'approve'])->name('withdraw.approve');
    Route::get('withdraw/approved', [withdrawController::class, 'approved'])->name('withdraw.approved');
    
    
    // deposit requests routes
    Route::get('deposit/requests', [depositRequestController::class, 'index'])->name('all.deposit.requests');
    Route::get('deposit/approve/{id}', [depositRequestController::class, 'approve'])->name('deposit.approve');
    Route::get('deposit/approved', [depositRequestController::class, 'approved'])->name('deposit.approved');
    

});


Route::middleware(userAuthMiddleware::class)->group(function () {
    // user routes
    Route::get('user/account', [homeController::class, 'index'])->name('user.account');

    // account 
    Route::get('user/withdraw', [homeController::class, 'withdraw'])->name('user.withdraw');
    Route::post('request/withdraw', [homeController::class, 'requestWithdraw'])->name('request.withdraw');
    
    // transactions
    Route::get('user/transactions', [homeController::class, 'transactions'])->name('user.transactions');
    Route::get('/ledger-history', [homeController::class, 'ledgerHistory'])->name('ledger.history');

    // deposit routes
    Route::get('user/deposit', [depositController::class, 'index'])->name('user.deposit');
    Route::post('user/deposit', [depositController::class, 'deposit'])->name('user.deposit.store');
    Route::get('admin/info/{deposit_id}', [depositController::class, 'admininfo'])->name('deposit.admininfo');
    Route::post('uploadscreenshoot', [depositController::class, 'uploadscreenshoot'])->name('deposit.uploadscreenshoot');

});



Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');
    Artisan::call('view:clear');
    return "Cache Cleared!";
});
