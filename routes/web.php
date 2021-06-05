<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WhoareweController;
use App\Http\Controllers\ListingController;

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

Route::view('/', 'front.home.index');

//Front Routes
Route::view('/home', 'front.home.index')->name('home');
Route::view('/blog', 'front.blog.index')->name('blog');
Route::view('/detail_blog', 'front.blog.detail')->name('detail_blog');
Route::view('/contact', 'front.contact.index')->name('contact');
Route::view('/promo', 'front.promo.index')->name('promo');
Route::view('/advertise', 'front.advertise.index')->name('advertise');
Route::view('/directory', 'front.directory.index')->name('directory');
Route::view('/detail_directory', 'front.directory.detail')->name('detail_directory');
Route::get('/whoweare', [WhoareweController::class, 'index'])->name('whoweare');

//CMS Routes
Route::prefix('cms')->group(function () {
    Route::view('/', 'cms.dashboard.index', ['pageName'    => 'Dashboard'])->name('dashboard');
    Route::view('/dashboard', 'cms.dashboard.index', ['pageName'    => 'Dashboard'])->name('dashboard');

    //Who are we process
    Route::get('/whoarewe', [WhoareweController::class, 'show'])->name('waw.index');
    // Route::get('/fetchData', [WhoareweController::class, 'fetch'])->name('waw.fetch');
    Route::post('/whoarewe', [WhoareweController::class, 'post'])->name('waw.post');

    //Listing process
    Route::get('/listing/create', [ListingController::class, 'create'])->name('listing.create');

    //Login Process
    Route::get('/login', [AuthController::class, 'show'])->name('login.index');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.process');
    Route::get('/logout', [AuthController::class, 'logout'])->name('login.logout');

    Route::view('/reset', 'auth.reset', ['pageName'    => 'Reset Password'])->name('reset.index');
});
