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
    return view('products');
});

Route::get('showUpload', function () {
    return view('upload');
});

Route::get('/upload', [App\Http\Controllers\UploadController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [App\Http\Controllers\UploadController::class, 'upload'])->name('upload');
Route::post('/add/product', [ProductController::class, 'store'])->name('add.product');