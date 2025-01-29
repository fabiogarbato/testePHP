<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\FibonacciController;

Route::get('/', function () {
    return view('home');
});

Route::get('/calculadora', [CalculatorController::class, 'index']);
Route::post('/calculadora', [CalculatorController::class, 'process']);
Route::get('/fibonacci', [FibonacciController::class, 'index']);
Route::post('/fibonacci', [FibonacciController::class, 'calculate']);