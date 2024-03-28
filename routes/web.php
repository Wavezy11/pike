<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController; // Corrected controller name
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController; // Added missing import
use App\Http\Controllers\UploadController; // Added missing import

// Define routes for the shopping cart
Route::get('/shopping-cart', [ShoppingCartController::class, 'index'])->name('shopping.cart');
Route::post('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('addToCart'); // Corrected controller name

// Other routes...

Route::get('/', [ProductController::class, 'index']);


Route::get('/product/{id}', [ProductController::class, 'show'])->name('showproduct');
Route::get('/show-all-products', [ProductController::class, 'showAllProducts'])->name('showAllProducts'); // Renamed route for clarity


Route::get('/filterByPrice', 'ProductController@filterProducts')->name('filterByPrice');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/filter-products', [ProductController::class, 'filterProducts'])->name('filterProducts');

Route::get('/ShoppingCart', [ProductController::class, 'shoppingCart'])->name('ShoppingCart');
Route::get('/shopping-cart', [ShoppingCartController::class, 'index'])->name('shopping.cart');


Route::delete('/remove-from-cart/{itemId}', [ShoppingCartController::class, 'removeFromCart'])->name('remove.from.cart');
Route::put('/update-cart/{itemId}', [ShoppingCartController::class, 'updateCart'])->name('update.cart');


// Routes voor de loginpagina en de registratiepagina

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>


