<?php

use App\Models\City;
use App\Utils\Utils;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\UploadController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ListingController;
use App\Http\Controllers\Backend\PurposeController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\WhoWeAreController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PromotionController;
use App\Http\Controllers\Backend\ListingTagController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\SubscriptionController;
use App\Http\Controllers\Backend\ListingGalleryController;
use App\Http\Controllers\Backend\AdvertiseWithUsController;
use App\Http\Controllers\Backend\ListingCategoryController;
use App\Http\Controllers\Backend\ListingRatingCategoryController;

//Login Process
Route::get('/login', [AuthController::class, 'show'])->name('login.index');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('login.logout');
Route::view('/reset', 'auth.reset', ['pageName'    => 'Reset Password'])->name('reset.index');

Route::group(["middleware" => "auth"], function() {
    Route::get('/', [DashboardController::class, "index"])->name('dashboard.index');

    //Who are we process
    Route::get('/whoarewe', [WhoWeAreController::class, 'index'])->name('waw.index');
    Route::post('/whoarewe', [WhoWeAreController::class, 'store'])->name('waw.store');

    // Listing process
    Route::resource('listings', ListingController::class);
    Route::resource('listing-categories', ListingCategoryController::class);
    Route::resource('rating-categories', ListingRatingCategoryController::class, [
        "names" => "rating_categories"
    ]);
    Route::get('listings/{listing}/add-ratings', [ListingController::class, 'addRatings'])->name('listings.add_ratings');
    Route::get('listings/{listing}/add-faq', [ListingController::class, 'addFaq'])->name('listings.add_faq');

    // listing tags
    Route::resource('listing-tags', ListingTagController::class);
    Route::name('listing-tags.tags.')->prefix("listing-tags/tags/{tagID}")->group(function() {
        Route::get('create', [ListingTagController::class, "addTag"])->name('create');
        Route::post('', [ListingTagController::class, "storeTag"])->name('store');
        Route::get('{id}/edit', [ListingTagController::class, "editTag"])->name('edit');
        Route::put('{id}', [ListingTagController::class, "updateTag"])->name('update');
        Route::delete('{id}', [ListingTagController::class, "destroyTag"])->name('destroy');
    });

    Route::name('listings.galleries.')->prefix('listings/{listing}/galleries')->group(function() {
        Route::get('/', [ListingGalleryController::class, 'index'])->name('index');
        Route::get('/create', [ListingGalleryController::class, 'create'])->name('create');
        Route::post('/', [ListingGalleryController::class, 'store'])->name('store');
        Route::get('/{id}', [ListingGalleryController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ListingGalleryController::class, 'update'])->name('update');
        Route::delete('/{id}', [ListingGalleryController::class, 'destroy'])->name('destroy');
    });

    // Blog
    Route::resource('blog-categories', BlogCategoryController::class);
    Route::resource('blog', BlogController::class);

    // promotions
    Route::resource('promotions', PromotionController::class);

    // user
    Route::resource('/users', UserController::class);

    // Role
    Route::resource('/roles', RoleController::class);

    // FAQ
    Route::resource('/pages', PageController::class);

    // Purpose
    Route::resource('/purposes', PurposeController::class);

    // Home
    Route::resource('/home', HomeController::class);

    // Banner
    Route::resource('/banners', BannerController::class);

    // Contact
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');
    Route::get('/destroy/{id}', [SubscriptionController::class, 'destroy'])->name('subscriptions.destroy');
    Route::get('/subscriptions/export', [SubscriptionController::class, 'export'])->name('subscriptions.export');

    // Settings
    Route::get('profile-setting', [SettingController::class, "profile"])->name('profile.index');
    Route::post('profile-setting', [SettingController::class, "updateProfile"])->name('profile.update');
    Route::resource('/menus', MenuController::class);

    // adv with us
    Route::get('adv-with-us', [AdvertiseWithUsController::class, "edit"])->name('adv.edit');
    Route::POST('adv-with-us', [AdvertiseWithUsController::class, "update"])->name('adv.update');

    // utility
    // probably will not used in the future for now dont delete
    Route::post('/editor-upload-image', [UploadController::class, 'editorImageUpload'])->name('upload.editor-image');

});
// load for forms
Route::get('/cities', function(Request $request) {
    $cities = City::where('province_id', $request->province_id)->get();
    return response()->json(Utils::createModelChoices($cities, "id", "name"));
})->name('cities');

Route::get('/districts', function(Request $request) {
    $districts = District::where('city_id', $request->city_id)->get();
    return response()->json(Utils::createModelChoices($districts, "id", "name"));
})->name('districts');
