<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProfileController;
use app\Http\Controllers\UserController;

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
/*
Route::get('/', function () {
    return view('welcome');
});\*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile/{userID}', function ($userID) {
    return view('profile');
})->name('profile');

Route::prefix('/product')->group (function () {
    Route::get('/catalog', function() {
        return view('catalog');
    })->name('product-catalog');

    Route::get('/{productID}/order', function($productID) {
        return view('order');
    })->name('order');

    Route::prefix('/{productID}/cart') -> group (function ($productID) {
        Route::get('/', [CartController::class, 'viewCart']);
        Route::get('/add', [CartController::class, 'addToCart']);
        Route::get('/remove', [CartController::class, 'removeFromCart']);
    })->name('cart');
});

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/chat', function() {
    return view('chat');
}) -> name('chat');

Route::get('/location', function() {
    return view('select-location');
}) -> name('location.select');

Route::get('/rental-date', function() {
    return view('select-rental-date');
}) -> name('rental-date.select');

Route::prefix('/auth') -> group (function () {
    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::post('/register', [UserController::class, 'register']);

    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/login', [UserController::class, 'login']);
});

Route::prefix('/{productID}/payment') -> group (function () {
    Route::get('/', function() {
        return view('payment');
    })->name('payment');

    Route::get('/summary', function () {
        return view('payment-summary');
    })->name('payment-summary');
});
