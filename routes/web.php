<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/login', [UserController::class,"login"] )->name("login");
Route::get('/logout', [UserController::class,"logout"] )->name("logout");
Route::post('/login', [UserController::class,"loginPost"]);
Route::get('/product/{slug}', [PageController::class,"product"] )->name("product");

Route::group(['middleware'=>IsAdmin::class],function(){
    Route::get('/', [AdminController::class,"index"])->name('dashboard');
    Route::get('/products', [AdminController::class,"products"])->name('products');
    Route::get('/categories', [AdminController::class,"categories"])->name('categories');
    Route::get('/bellamaison', [AdminController::class,"bellaMaison"])->name('bellam');
    Route::get("/fetch",[ApiController::class,'updateProducts'])->name('fetch');
});
