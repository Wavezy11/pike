<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/loggingin', function () {
    return view('PushThrough');
});
Route::get('/processing', function () {
    return view('processing');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('showUpload', function () {
    return view('upload');
});

Route::get('/upload', [App\Http\Controllers\UploadController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [App\Http\Controllers\UploadController::class, 'upload'])->name('upload');
Route::post('/add/product', [ProductController::class, 'store'])->name('add.product');
Route::post('/processing', 'App\Http\Controllers\Logging@store()');