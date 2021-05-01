<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::view('/dashboard','dashboard')->name('dashboard');
    Route::view('/exam/{id}','exam')->name('exam');
});
