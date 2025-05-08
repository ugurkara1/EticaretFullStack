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
})->name('index');

Route::get('/urun-listesi',[ProductController::class,"list"]);
Route::get('/urun-detay',[ProductController::class,"detail"]);
Route::get("/sepet",[CardController::class,"card"]);
Route::get('/ödeme',[CheckoutController::class,"index"]);
Route::get("/siparislerim",[MyOrderController::class,"index"]);
Route::get("/siparislerim-detay",[MyOrderController::class,"detail"]);

Route::prefix("admin")->middleware("auth")->group(function(){
    Route::get("/", [AdminController::class, "index"])->name("admin.index");
});

/* Auth */


Route::get('/dogrula/{token}', [RegisterController::class, 'verify'])->name('verify');

Route::prefix('giris')->middleware('throttle:10,60')->name('login')->group(function(){
    Route::get("/",[LoginController::class,'showForm'])->name("login")->middleware('throttle:60,1');
    Route::post("/",[LoginController::class,'login']);
});
Route::prefix('kayit-ol')->middleware('throttle:registration')->group(function () {
    Route::get('/', [RegisterController::class, 'showForm'])->name('register');
    Route::post('/', [RegisterController::class, 'register']);
});

Route::post('logout',[LoginController::class,'logout'])->name("logout");