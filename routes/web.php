<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TamuController;
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

Route::get('/', [TamuController::class, 'index']);
Route::post('/tamu', [TamuController::class, 'store']);

// admin
// login
Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);
// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');
// tamu
Route::get('/_tamu', [TamuController::class, '_tamu'])->middleware('admin');
Route::delete('/tamu/{id}', [TamuController::class, 'destroy'])->middleware('admin');
Route::get('/tamu/detail/{id}', [TamuController::class, 'show'])->middleware('admin');
Route::get('/tamu/edit/{id}', [TamuController::class, 'edit'])->middleware('admin');
Route::put('/tamu/{id}', [TamuController::class, 'update'])->middleware('admin');
// laporan
Route::get('/report', [ReportController::class, 'index'])->middleware('admin');
Route::get('/report/printpdf/get-data', [ReportController::class, 'printPdf'])->middleware('admin');
// profile
Route::get('/profile', [ProfileController::class, 'index'])->middleware('admin');
Route::get('/profile/changepassword', [ProfileController::class, 'changePassword'])->middleware('admin');
Route::post('/savepass', [ProfileController::class, 'savePassword'])->middleware('admin');
