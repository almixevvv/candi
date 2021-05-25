<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AuthController;

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


Route::prefix('cms')->group(function () {
    Route::view('/', 'dashboard.index', ['pageName'    => 'Dashboard'])->middleware('auth')->name('dashboard');
    Route::view('/dashboard', 'dashboard.index', ['pageName'    => 'Dashboard'])->middleware('auth')->name('dashboard');

    //Login Process
    // Route::view('/login', [AuthController::class, 'show'])->name('login.index');
    Route::get('/login', [AuthController::class, 'show'])->name('login.index');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.process');


    Route::view('/reset', 'auth.reset', ['pageName'    => 'Reset Password'])->name('reset.index');
});
