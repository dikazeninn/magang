<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('kontak-kami',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::get('produk',[\App\Http\Controllers\ProductController::class,'index'])->name('product');
Route::get('produk/{slug}',[\App\Http\Controllers\ProductController::class,'show'])->name('product.show');

