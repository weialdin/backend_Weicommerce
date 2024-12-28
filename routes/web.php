<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');


Route::get('products/{id}/gallery', [ProductController::class, 'gallery'])
    ->middleware('auth')
    ->name('products.gallery');
Route::resource('products', ProductController::class)
    ->middleware('auth');
Route::resource('galleries', ProductGalleryController::class)
    ->middleware('auth');
Route::resource('transactions', TransactionController::class)
    ->middleware('auth');
Route::get('transactions/{id}/set-status', [TransactionController::class, 'setStatus'])
    ->middleware('auth')
    ->name('transactions.status');

Auth::routes();
