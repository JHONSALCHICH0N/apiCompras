<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#Proveedores

Route::get('/proveedores',                          'App\Http\Controllers\ProveedoreController@index');
Route::post('/proveedor',                           'App\Http\Controllers\ProveedoreController@store');
Route::get('/proveedor/{proveedore}',               'App\Http\Controllers\ProveedoreController@show');
Route::put('/proveedor/{proveedore}',               'App\Http\Controllers\ProveedoreController@update');
Route::delete('/proveedor/{proveedore}',            'App\Http\Controllers\ProveedoreController@destroy');
