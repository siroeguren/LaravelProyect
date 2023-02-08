<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Pruebas;
use App\Http\Controllers\Usuarios;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/prueba', [Pruebas::class,'hacerPrueba']);


Route::get('/param/{id?}', function ($id = "Default")
{
    echo ('Param :'.$id);
});

// Route::get('/users/{id?}', [Usuarios::class , 'getUserByID']);

Route::get('/users/{id?}', [Usuarios::class , 'getUserByID']);

Route::get('/products',[ProductsController::class, 'getAllProducts']);

Route::get('/productsInsert/{nombre?}/{price?}/{descripcion?}/{stock?}', [ProductsController::class, 'insertarProducto']);

Route::post('/products/insertarProducto',[ProductsController::class, 'insertarProducto']);


//// FORMULARIO ////

Route::get('/formulario', function ()
{
    return view('formulario');
});

//// Filtro formulario ////
Route::get('/filter', function ()
{
    return view('filter');
});

//Put Formulario

Route::get("products/{id}",[ProductsController::class, 'getProductById']);


