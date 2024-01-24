<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\serviceController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/login');
});
Route::post("login",[UserController::class,'login']);
Route::get("/",[serviceController::class,'index']);
Route::get("detail/{id}",[serviceController::class,'detail']);
Route::post("add_to_cart",[serviceController::class,'addToCart']);
Route::get("cartlist",[serviceController::class,'cartList']);