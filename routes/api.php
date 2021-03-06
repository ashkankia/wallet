<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\BalanceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("transactions", [TransactionController::class, 'index']);

Route::post("transactions", [TransactionController::class, 'store']);

Route::get("balances/{id}", [BalanceController::class, 'show']);
