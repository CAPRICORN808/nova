<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RecordController::class, 'index'])->name('home');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [RecordController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

    // Клиент создаёт записи
    Route::get('/records/create', [RecordController::class, 'create'])->name('records.create');
    Route::post('/records', [RecordController::class, 'store'])->name('records.store');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/records', [AdminController::class, 'records'])->name('records');
    Route::get('/records/create', [AdminController::class, 'create'])->name('records.create');
    Route::post('/records', [AdminController::class, 'store'])->name('records.store');
    Route::get('/records/{id}/edit', [AdminController::class, 'edit'])->name('records.edit');
    Route::put('/records/{id}', [AdminController::class, 'update'])->name('records.update');
    Route::delete('/records/{id}', [AdminController::class, 'destroy'])->name('records.destroy');
});