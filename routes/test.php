<?php

use Illuminate\Support\Facades\Route;

//--------- Test Crud ---------
use App\Http\Controllers\Test\Crud\CrudTestController;

Route::get('/grid', function () {
    return view('test.tailwind.grid');
});

//---------- Test crud ------------
Route::get('/crud', [CrudTestController::class, 'index'])->name('crud.index');
Route::get('/crud/create', [CrudTestController::class, 'create'])->name('crud.create');
Route::post('/crud/store', [CrudTestController::class, 'store'])->name('crud.store');
Route::get('/crud/edit/{idTipoProducto}', [CrudTestController::class, 'edit'])->name('crud.edit');
Route::put('/crud/update/{idTipoProducto}', [CrudTestController::class, 'update'])->name('crud.update');
Route::delete('/crud/delete/{idTipoProducto}', [CrudTestController::class, 'destroy'])->name('crud.delete');
