<?php

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
    return view('tienda_peruvian.inicio');
});

Route::get('/iatec', function () {
    return view('iatec.inicio');
});

Route::get('/soporte_online', function () {
    return view('soporte_online.inicio');
});

Route::get('/productos_digitales', function () {
    return view('productos_digitales.inicio');
});

Route::get('/tienda_peruvian', function () {
    return view('tienda_peruvian.inicio');
});
