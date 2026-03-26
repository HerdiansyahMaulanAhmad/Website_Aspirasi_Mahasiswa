<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AspirationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route home
Route::get('/', [AspirationController::class, 'index'])->name('aspirasi');

// Route untuk aspirasi
Route::get('/aspirasi', [AspirationController::class, 'index'])->name('aspirations.index');
Route::post('/aspirasi', [AspirationController::class, 'store'])->name('aspirations.store');
Route::delete('/aspirasi/{aspiration}', [AspirationController::class, 'destroy'])->name('aspirations.destroy');

// Route untuk halaman about
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// Route untuk data pengguna
Route::get('/data', [UserController::class, 'index'])->name('users.index');

Route::get('/login', function () {return view('aspirations');})->name('dashboard');

// Route autentikasi (Laravel sudah menyediakan)
Auth::routes();