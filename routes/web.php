<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Models\Products;

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

// Products Route
// get
Route::get('/', [ProductsController::class,'index']);
Route::get('/drinks', [ProductsController::class,'showDrinks']);
Route::get('/snacks', [ProductsController::class,'showSnacks']);
Route::get('/sweets', [ProductsController::class,'showSweets']);
Route::get('/products', [ProductsController::class,'showProducts']);
Route::get('/products/{id}', [ProductsController::class,'showProduct']);
Route::get('/update/{id}', [ProductsController::class,'showUpdate'])->middleware('auth');

// post
Route::post('/add-product', [ProductsController::class,'store']);
Route::delete('/remove/{id}', [ProductsController::class,'remove'])->middleware('auth');
Route::put('/update/{id}', [ProductsController::class,'update'])->middleware('auth');


// Users Route
// get
Route::get('/login', [UsersController::class,'index'])->name('login')->middleware('guest');
Route::get('/register', [UsersController::class,'showRegister'])->middleware('guest');
Route::get('/profile', [UsersController::class,'showProfile'])->middleware('auth');

// post
Route::post('/login/process', [UsersController::class,'login']);
Route::post('/register/process', [UsersController::class,'register']);
Route::post('/logout', [UsersController::class,'logout']);
Route::post('/update/{id}', [UsersController::class,'update']);

// Cart Route
// get
Route::get('/cart', [CartController::class,'index'])->middleware('auth');
Route::get('/delete/{id}', [CartController::class,'destroy'])->middleware('auth');

// post
Route::post('/add-cart', [CartController::class,'store'])->middleware('auth');
Route::post('/checkout/{id}', [CartController::class,'checkout'])->middleware('auth');
Route::post('/update/quantity/{id}', [CartController::class,'updateQuantity'])->middleware('auth');