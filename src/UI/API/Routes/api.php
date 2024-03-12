<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Products\UI\API\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
