<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::post('/home', [HomeController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/report', [ReportController::class, 'index']);
    Route::get('/report/exportpdf', [ReportController::class, 'exportPdf']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/editprofile', [ProfileController::class, 'editProfile']);
    Route::post('/profile/updateprofile', [ProfileController::class, 'updateProfile']);
    Route::get('/profile/changepassword', [ProfileController::class, 'changePassword']);
    Route::post('/profile/updatepassword', [ProfileController::class, 'updatePassword']);
});
