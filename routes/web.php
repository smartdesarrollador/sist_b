<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */


Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/**
 * Rutas de la tienda
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
