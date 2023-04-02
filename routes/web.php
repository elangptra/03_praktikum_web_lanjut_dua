<?php

use App\Http\Controllers\ExpsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/pengalaman', [ExpsController::class, 'index']) -> name('kuliah');

// Route::resource('dashboard', ExpsController::class);
Route::get('/profile/{profile?}', [ProfileController::class,'profile']);

// Route::get('/pengalaman', [PengalamanController::class, 'pengalaman'])->name('kuliah');