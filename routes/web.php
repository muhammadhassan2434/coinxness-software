<?php

use App\Http\Controllers\admin\authController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserContoller;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', [authController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [authController::class, 'auth'])->name('admin.auth');
Route::get('/admin/logout', [authController::class, 'logout'])->name('admin.logout');



Route::middleware(AdminAuthMiddleware::class)->group(function () {

    // dashboard routes
    Route::get('dashboard', [DashboardController::class, 'index'])->prefix('admin')->name('dashboard.index');



    // user routes
    Route::get('user', [UserContoller::class, 'index'])->name('user.index');
    Route::get('create/user', [UserContoller::class, 'create'])->name('user.create');
    Route::post('user/store', [UserContoller::class, 'store'])->name('user.store');
    Route::get('edit/user/{id}', [UserContoller::class, 'edit'])->name('user.edit');
    Route::put('user/update/{id}', [UserContoller::class, 'update'])->name('user.update');
    Route::delete('user/destroy/{id}', [UserContoller::class, 'destroy'])->name('user.destroy');


    Route::put('/user/update-profit/{id}', [UserContoller::class, 'updateProfit'])->name('user.update-profit');
    Route::put('/user/update-loss/{id}', [UserContoller::class, 'updateLoss']);
});
