<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Event;
use App\Models\Reservation;
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

Route::post('/register', [UserController::class, 'store'])->name('store.user');
Route::get('/register', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login'])->name('login.trait');
Route::post('/sendMail', [ForgetPasswordController::class, 'sendMail'])->name('forgetPassword.trait');
Route::get('/forgetPassword', [ForgetPasswordController::class, 'showForgetPasswordForm']);
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/add/event', [EventController::class, 'store'])->name('add.event');
Route::get('/static', [DashboardController::class, 'index'])->name('static.dashboard');
Route::get('/content/{id}/{categoryId}', [HomeController::class, 'showContentPage'])->name('content.page');

Route::get('/category', [CategoryController::class, 'index'])->name('category.dashboard');
Route::post('/category/add', [CategoryController::class, 'store'])->name('add.category');
Route::delete('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
Route::put('/update-category/{id}', [CategoryController::class, 'updateCategory'])->name('update.category');

Route::get('/event', [EventController::class, 'showEvents'])->name('show.event.dashboard');
Route::post('/event/approve/{id}', [EventController::class, 'approveEvent'])->name('approve.event');
Route::post('/event/decline/{id}', [EventController::class, 'declineEvent'])->name('decline.event');
Route::post('/reservation', [ReservationController::class, 'reserve'])->name('reserve.ticket');
Route::get('/dashboard/changeRole', [DashboardController::class, 'changeRole'])->name('change.role');
Route::post('/dashboard/update', [DashboardController::class, 'updateRole'])->name('update.role');


Route::get('/login', function () {
    return view('authentication.authentication');
});
