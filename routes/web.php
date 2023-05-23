<?php

use App\Http\Controllers\PayController;
use Illuminate\Support\Facades\Route;

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

Route::get('mpesa/token', [PayController::class, 'token']);
Route::get('mpesa/initiateStk', [PayController::class, 'initiateStkPush']);
Route::post('mpesa/stkCallback', [PayController::class, 'stkCallback']);
Route::get('mpesa/stkquery', [PayController::class, 'stkQuery']);

Route::get('pay', [PayController::class, 'stk']);