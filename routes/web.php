<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;

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
Route::get('/sumar/{num1}/{num2}',[OperacionesController::class,'sumar']);

Route::get('/saludofuncion',[OperacionesController::class,'saludar']);

Route::get('/restar/{num1}/{num2}',[OperacionesController::class,'restar']);

Route::get('/multiplicar/{num1}/{num2}',[OperacionesController::class,'multiplicar']);
