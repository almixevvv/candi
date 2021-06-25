<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\UploadController;
use App\Http\Controllers\Backend\WhoWeAreController;

// Auth::loginUsingId(1);

//Login Process
Route::get('/login', [AuthController::class, 'show'])->name('login.index');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('login.logout');
Route::view('/reset', 'auth.reset', ['pageName'    => 'Reset Password'])->name('reset.index');

Route::group(["middleware" => "auth"], function() {
    Route::view('/', 'cms.dashboard.index', ['pageName'    => 'Dashboard'])->name('dashboard.index');
    Route::view('/dashboard', 'cms.dashboard.index', ['pageName'    => 'Dashboard'])->name('dashboard.index');

    //Who are we process
    Route::get('/whoarewe', [WhoWeAreController::class, 'index'])->name('waw.index');
    // Route::get('/fetchData', [WhoareweController::class, 'fetch'])->name('waw.fetch');
    Route::post('/whoarewe', [WhoWeAreController::class, 'store'])->name('waw.store');

    //Listing process
    Route::get('/listing', [ListingController::class, 'create'])->name('listing.index');
    Route::get('/listing/create', [ListingController::class, 'create'])->name('listing.create');

    // user
    Route::resource('/users', UserController::class);

    // Role
    Route::resource('/roles', RoleController::class);

    // utility
    // probably will not used in the future for now dont delete
    Route::post('/editor-upload-image', [UploadController::class, 'editorImageUpload'])->name('upload.editor-image');
});
