<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/login-admin', [authController::class, 'showAdminLoginForm'])->name('login.admin');
Route::post('/login/authenticate', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('/attendance/checkin/face', [AuthController::class, 'checkinFace'])->name('attendance.checkin.face');
Route::post('/attendance/checkout/face', [AuthController::class, 'checkoutFace'])->name('attendance.checkout.face');
Route::post('/attendance/checkin/qr', [AuthController::class, 'checkinQr'])->name('attendance.checkin.qr');
Route::post('/attendance/checkout/qr', [AuthController::class, 'checkoutQr'])->name('attendance.checkout.qr');
