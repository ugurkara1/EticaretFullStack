<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Front\CardController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\MyOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});
Route::get('/urun-listesi',[ProductController::class,"list"]);
Route::get('/urun-detay',[ProductController::class,"detail"]);
Route::get("/sepet",[CardController::class,"card"]);
Route::get('/ödeme',[CheckoutController::class,"index"]);
Route::get("/siparislerim",[MyOrderController::class,"index"]);
Route::get("/siparislerim-detay",[MyOrderController::class,"detail"]);
Route::middleware('throttle:registration')->group(function () {
    Route::get('/kayit-ol', [RegisterController::class, 'showForm'])->name('register');
    Route::post('/kayit-ol', [RegisterController::class, 'register']);
});

Route::get("giris",[LoginController::class,'showForm'])->name("login")->middleware('throttle:60,1');
Route::post("giris",[LoginController::class,'login']);
Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"index"]);
});