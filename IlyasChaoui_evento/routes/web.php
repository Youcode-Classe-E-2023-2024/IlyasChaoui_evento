<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/register', [UserController::class , 'store'])->name('store.user');
Route::get('/register', [UserController::class , 'index']);
Route::post('/login', [UserController::class , 'login'])->name('login.trait');
Route::post('/sendMail', [ForgetPasswordController::class , 'sendMail'])->name('forgetPassword.trait');
Route::get('/forgetPassword', [ForgetPasswordController::class , 'showForgetPasswordForm']);
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/add/event', [EventController::class, 'store'])->name('add.event');
Route::get('/dashboard/static', [DashboardController::class, 'index'])->name('static.dashboard');

Route::get('/login', function () {
    return view('authentication.authentication');
});
