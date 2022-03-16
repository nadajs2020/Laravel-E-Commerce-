<?php

use Whoops\Run;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\UserDashboardController;
use App\Http\Controllers\Dashboard\IndexDashboardController;

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

// this is Routes in Auth (register , login , logout )

Route::group(['prefix' => 'register'], function () {
    Route::get('/', [AuthController::class, 'view_register']);
    Route::post('/', [AuthController::class, 'do_register']);
});
Route::group(['prefix' => 'login'], function () {
    Route::get('/', [AuthController::class, "view_login"]);
    Route::post('/', [AuthController::class, "do_login"]);
});
Route::get('/logout', [AuthController::class, 'storelogout'])->name('logout');

// Route home
Route::group(['prefix' => 'home'], function () {
    Route::get('/', [HomeController::class, 'indexHome']);
    Route::post('/', [HomeController::class, 'addToCaret']);
});

// Route Shop
Route::group(['prefix' => 'shop'], function () {
    Route::get('/', [ShopController::class, 'indexHome']);
    Route::post('/', [ShopController::class, 'addToCaret']);
});

Route::group(['prefix' => 'shopping-cart'], function () {
    Route::get('/', [CartController::class, 'index']);
    Route::post('/delete', [CartController::class, 'deleteItemFromCart']);
    Route::post('/delete-all', [CartController::class, 'cartDeleteAll']);
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'indexContact']);
    Route::post('/', [ContactController::class, 'saveFeedback']);
});

//  this is a Route (Dashboard)
Route::group(['prefix' => '/admin', 'middleware' => ['isAdmin', 'auth']], function () {
    Route::get('/', [IndexDashboardController::class, 'index'])
        ->name('dashboard');
    Route::get('/users', [UserDashboardController::class, 'index'])
        ->name('users');
    Route::get('/logout', [IndexDashboardController::class, "doLogout"])
        ->name('logout');
});

Route::get('about', function () {
    return view('Ecommer.about');
});
Route::get('blog', function () {
    return view('Ecommer.blog');
});

