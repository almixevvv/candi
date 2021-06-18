<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\WhoareweController;


Route::view('/', 'cms.dashboard.index', ['pageName'    => 'Dashboard'])->name('dashboard.index');
Route::view('/dashboard', 'cms.dashboard.index', ['pageName'    => 'Dashboard'])->name('dashboard.index');

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
