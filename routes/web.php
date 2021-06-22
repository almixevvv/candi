<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

use App\Http\Controllers\WhoareweController;
use CKSource\CKFinderBridge\Controller\CKFinderController;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

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

Route::get('/', function (Request $request) {
    return view('front.home.index', ['request' => $request]);
});

//Front Routes
Route::get('/home', function (Request $request) {
    return view('front.home.index', ['request' => $request]);
})->name('home');

Route::get('/blog', function (Request $request) {
    return view('front.blog.index', ['request' => $request]);
})->name('blog');

Route::get('/detail_blog', function (Request $request) {
    return view('front.blog.detail', ['request' => $request]);
})->name('blog.detail');

Route::get('/contact', function (Request $request) {
    return view('front.contact.index', ['request' => $request]);
})->name('contact');

Route::get('/promo', function (Request $request) {
    return view('front.promo.index', ['request' => $request]);
})->name('promo');

Route::get('/advertise', function (Request $request) {
    return view('front.advertise.index', ['request' => $request]);
})->name('advertise');

Route::get('/directory', function (Request $request) {
    return view('front.directory.index', ['request' => $request]);
})->name('directory');

Route::get('/detail_directory', function (Request $request) {
    return view('front.directory.detail', ['request' => $request]);
})->name('detail_directory');

Route::get('/whoweare', [WhoareweController::class, 'index'])->name('whoweare');

//CMS Routes
Route::prefix('cms')->name('cms.')->group(base_path('routes/cms.php'));


// Storage Manipulation to prevent file upload attack (php script upload)
Route::get('storage/{path}', function ($path) {
    $path = storage_path("app/public/$path");
    try {
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    } catch (FileNotFoundException $e) {
        abort(404);
    }
})->where('path', ".*")->name('storage');

// CKFinder
Route::any('/ckfinder/connector', [CKFinderController::class, 'requestAction'])->name('ckfinder_connector');
Route::any('/ckfinder/browser', [CKFinderController::class, 'browserAction'])->name('ckfinder_browser');
