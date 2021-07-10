<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\UploadController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ListingController;
use App\Http\Controllers\Backend\PurposeController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\WhoWeAreController;
use App\Http\Controllers\Backend\ListingTagController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ListingCategoryController;

//Login Process
Route::get('/login', [AuthController::class, 'show'])->name('login.index');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('login.logout');
Route::view('/reset', 'auth.reset', ['pageName'    => 'Reset Password'])->name('reset.index');

Route::group(["middleware" => "auth"], function() {
    Route::get('/', [DashboardController::class, "index"])->name('dashboard.index');

    //Who are we process
    Route::get('/whoarewe', [WhoWeAreController::class, 'index'])->name('waw.index');
    // Route::get('/fetchData', [WhoareweController::class, 'fetch'])->name('waw.fetch');
    Route::post('/whoarewe', [WhoWeAreController::class, 'store'])->name('waw.store');

    //Listing process
    Route::resource('listings', ListingController::class);
    Route::resource('listing-categories', ListingCategoryController::class);

    // listing tags
    Route::resource('listing-tags', ListingTagController::class);
    Route::name('listing-tags.tags.')->prefix("listing-tags/tags/{tagID}")->group(function() {
        Route::get('create', [ListingTagController::class, "addTag"])->name('create');
        Route::post('', [ListingTagController::class, "storeTag"])->name('store');
        Route::get('{id}/edit', [ListingTagController::class, "editTag"])->name('edit');
        Route::put('{id}', [ListingTagController::class, "updateTag"])->name('update');
        Route::delete('{id}', [ListingTagController::class, "destroyTag"])->name('destroy');
    });

    // Blog
    Route::resource('blog-categories', BlogCategoryController::class);
    Route::resource('blog', BlogController::class);

    // user
    Route::resource('/users', UserController::class);

    // Role
    Route::resource('/roles', RoleController::class);

    // FAQ
    Route::resource('/faq', FaqController::class);

    // Purpose
    Route::resource('/purposes', PurposeController::class);

    // Contact
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

    // Settings
    Route::get('profile-setting', [SettingController::class, "profile"])->name('profile.index');
    Route::post('profile-setting', [SettingController::class, "updateProfile"])->name('profile.update');

    // utility
    // probably will not used in the future for now dont delete
    Route::post('/editor-upload-image', [UploadController::class, 'editorImageUpload'])->name('upload.editor-image');
});
