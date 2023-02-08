<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::post('/products/insertarProducto',[ProductsController::class, 'insertarProducto']);
Route::get('/products',[ProductsController::class, 'getAllProducts']);

Route::post('/formSubmit',[ProductsController::class, 'insertarProducto']);

Route::post('/filter',[ProductsController::class, 'filter']);
