<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [ProjectController::class, 'home']);
Route::get('/about', [ProjectController::class, 'about']);
Route::get('/portfolio', [ProjectController::class, 'index']);
Route::get('/contact', [ProjectController::class, 'contact']);
Route::get('/project/{id}', [ProjectController::class, 'show']);

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ADMIN CRUD
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [ProjectController::class, 'admin']);
    Route::get('/create', [ProjectController::class, 'create']);
    Route::post('/store', [ProjectController::class, 'store']);
    Route::get('/edit/{id}', [ProjectController::class, 'edit']);
    
    // Menggunakan POST tetap oke, tapi pastikan form-nya sesuai
    Route::post('/update/{id}', [ProjectController::class, 'update']);
    
    // Tetap gunakan GET jika kamu ingin menghapus lewat link sederhana, 
    // tapi pastikan ada konfirmasi di tampilan (JavaScript confirm)
    Route::get('/delete/{id}', [ProjectController::class, 'delete']);
});