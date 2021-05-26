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

Route::view('/', 'home.index');

//Front Routes
Route::view('/blog', 'front.blog.index')->name('blog');
Route::view('/whoweare', 'front.whoweare.index')->name('whoweare');
Route::view('/contact', 'front.contact.index')->name('contact');
Route::view('/promo', 'front.promo.index')->name('promo');
Route::view('/advertise', 'front.advertise.index')->name('advertise');
Route::view('/directory', 'front.directory.index')->name('directory');

//CMS Routes
Route::prefix('cms')->group(function () {
    Route::view('/', 'dashboard.index', ['pageName'    => 'Dashboard'])->name('dashboard');
    Route::view('/dashboard', 'dashboard.index', ['pageName'    => 'Dashboard'])->name('dashboard');

    //Login Process
    // Route::view('/login', [AuthController::class, 'show'])->name('login.index');
    Route::get('/login', [AuthController::class, 'show'])->name('login.index');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.process');


    Route::view('/reset', 'auth.reset', ['pageName'    => 'Reset Password'])->name('reset.index');
});
