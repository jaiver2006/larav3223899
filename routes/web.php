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

Route::get('/AreaTriangulo/{base}/{altura}',[OperacionesController::class,'AreaTriangulo']);

Route::get('/AreaCuadrado/{lado}',[OperacionesController::class,'AreaCuadrado']);

Route::get('/AreaRectangulo/{base}/{altura}',[OperacionesController::class,'AreaRectangulo']);

Route::get('/AreaParalelogramo/{base}/{altura}',[OperacionesController::class,'AreaParalelogramo']);

Route::get('/AreaCirculo/{radio}',[OperacionesController::class,'AreaCirculo']);

Route::get('/Trapecio/{base}/{altura}',[OperacionesController::class,'Trapecio']);

Route::get('/cuadratica/{a}/{b}/{c}',[OperacionesController::class,'cuadratica']);
