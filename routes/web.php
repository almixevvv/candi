<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\WhoareweController;
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

Route::view('/', 'front.home.index');

//Front Routes
Route::view('/home', 'front.home.index')->name('home');
Route::view('/blog', 'front.blog.index')->name('blog');
Route::view('/detail_blog', 'front.blog.detail')->name('blog.detail');
Route::view('/contact', 'front.contact.index')->name('contact');
Route::view('/promo', 'front.promo.index')->name('promo');
Route::view('/advertise', 'front.advertise.index')->name('advertise');
Route::view('/directory', 'front.directory.index')->name('directory');
Route::view('/detail_directory', 'front.directory.detail')->name('detail_directory');
Route::get('/whoweare', [WhoareweController::class, 'index'])->name('whoweare');


//CMS Routes
Route::prefix('cms')->name('cms.')->group(base_path('routes/cms.php'));


// Storage Manipulation to prevent file upload attack (php script upload)
Route::get('storage/{path}', function($path) {
    $path = storage_path("app/public/$path");
    try {
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }
    catch(FileNotFoundException $e) {
        abort(404);
    }
})->where('path', ".*")->name('storage');
