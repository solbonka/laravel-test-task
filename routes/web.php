<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/', fn() => redirect()->route('products.index'));

Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class)->except(['edit', 'destroy']);
Route::patch('/orders/{order}/complete', [OrderController::class, 'complete'])->name('orders.complete');
