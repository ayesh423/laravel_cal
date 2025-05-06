<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculaterController;

Route::get('/', function () {
    return view('index', [
        'answer' => session('answer', '0')
    ]);
})->name('index');

Route::post('/calculate', [CalculaterController::class, 'calculater'])->name('calculator');
