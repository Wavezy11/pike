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
Route::get('/login', function () {
    return view('login');
})->name('login'); // Named the login route

Route::post('/login', [LoginController::class, 'login']);
Route::get('/dashboard', function () {
    return view('products');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::post('/upload', [UploadController::class, 'upload']);

Route::get('/product/{id}', [ProductController::class, 'show'])->name('showproduct');
Route::get('/show-all-products', [ProductController::class, 'showAllProducts'])->name('showAllProducts'); // Renamed route for clarity

Route::get('/filterByPrice', [ProductController::class, 'filterByPrice'])->name('filterByPrice');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/filter-products', [ProductController::class, 'filterProducts'])->name('filterProducts');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/ShoppingCart', [ProductController::class, 'shoppingCart'])->name('ShoppingCart');
Route::get('/shopping-cart', [ShoppingCartController::class, 'index'])->name('shopping.cart');


Route::delete('/remove-from-cart/{itemId}', [ShoppingCartController::class, 'removeFromCart'])->name('remove.from.cart');
Route::put('/update-cart/{itemId}', [ShoppingCartController::class, 'updateCart'])->name('update.cart');


// Login routes
// Routes voor de loginpagina en de registratiepagina
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');



Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>


