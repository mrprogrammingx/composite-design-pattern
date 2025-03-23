<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [\App\Http\Controllers\FormController::class, 'index']);