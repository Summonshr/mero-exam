<?php

use App\Models\Question;
use App\Models\Word;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        return view('exam');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
