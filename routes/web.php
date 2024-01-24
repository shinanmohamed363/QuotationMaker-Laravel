<?php
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\serviceController;

use App\Mail\hellomail;
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
Route::view('Register','Register');
Route::post("login",[UserController::class,'login']);
Route::post("register",[UserController::class,'register']);
Route::get("/",[serviceController::class,'index']);
Route::get("detail/{id}",[serviceController::class,'detail']);
Route::post("add_to_cart",[serviceController::class,'addToCart']);
Route::get("cartlist",[serviceController::class,'cartList']);
Route::get("removecart/{id}",[serviceController::class,'removeCart']);
Route::get("ordernow",[serviceController::class,'orderNow']);
Route::post("orderplace",[serviceController::class,'orderplace']);
route::get('email',function(){mail::to('shinanmohamed363@gmail.com')->send(new \App\Mail\hellomail);});
Route::get("myorders",[serviceController::class,'myOrders']);