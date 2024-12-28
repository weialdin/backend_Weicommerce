<?php

use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\API\CheckoutController;
use App\Http\Controllers\API\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('products', [ApiController::class, 'all']);
Route::post('checkout', [CheckoutController::class, 'checkout']);
Route::get('transactions/{id}', [TransactionController::class, 'get']);
