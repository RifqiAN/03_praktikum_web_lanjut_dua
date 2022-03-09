<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get("/index", [IndexController::class, 'index']);
Route::get("/products", [ProductsController::class, 'index']);
Route::get("/about", [AboutController::class, 'index']);
Route::get("/contact", [ContactController::class, 'index']);
