<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/v1/easy',[PaymentController::class,"getPayment"]);
Route::get('/v1/moderate',[PaymentController::class,"getPaymentData"]);
Route::get('/v1/challenging',[PaymentController::class,"getPaymentChallenging"]);
Route::get('/v1/difficult',[PaymentController::class,"getPaymentDifficult"]);