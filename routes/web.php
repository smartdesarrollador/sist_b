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
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/vue3', function () {
    return view('vue3');
});

// ---------------- Test -------------
Route::get('/test/alert', function () {
    return view('test/alert');
});

// ---------------- Test  tailwindcss -------------
Route::get('/test/tailwindcss/ejemplo', function () {
    return view('test/tailwindcss/ejemplo');
});

Route::get('/test/tailwindcss/carousel', function () {
    return view('test/tailwindcss/carousel');
});
