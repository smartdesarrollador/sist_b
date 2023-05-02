<?php

use Illuminate\Support\Facades\Route;

Route::get('/grid', function () {
    return view('test.tailwind.grid');
});