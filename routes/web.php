<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IntroController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\SettingsController;


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

Route::get('/', [IntroController::class, 'index']);

Route::get('rooms', [IntroController::class, 'rooms']);

Route::get('facilities', [IntroController::class, 'facilities']);

Route::get('about', [IntroController::class, 'about']);

Route::get('contact', [IntroController::class, 'contact']);

// Route::resource('admin', App\Http\Controllers\AdminController::class);

Route::get('admin', [AdminController::class, 'index']);

Route::get('/dashboard', [AdminController::class, 'dashboard']);

Route::get('/settings', [AdminController::class, 'index_settings']);

Route::POST('/dashboard', [AdminController::class, 'authentificate'])->name('admin.authentificate');