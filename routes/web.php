<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;

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

Route::get('/', [UserController::class, "showHomePage"]);
Route::get('/login', [UserController::class, "showLoginPage"]);
Route::get('/signUp', [UserController::class, "showSignUp"]);
Route::post('/login', [UserController::class , "login"]);
Route::post('/signUp', [UserController::class, "signUp"]);
Route::post('/logout', [UserController::class, "logout"]);


// store routes
Route::get("/store", [StoreController::class, "showStore"]);