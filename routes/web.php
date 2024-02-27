<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

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

// home page
Route::get('/', function () {
    return view('welcome');
});

// Route for the product page with route prefix
Route::prefix('/product')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
});

// Route for user page with route param
Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);

// Route for sales page
Route::get('/sales', [ProductController::class, 'index']);
