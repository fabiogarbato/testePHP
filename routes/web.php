<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', function () {
    return view('home');
});

Route::get('/calculadora', [CalculatorController::class, 'index']);
Route::post('/calculadora', [CalculatorController::class, 'process']);