<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', function () {
//     return view('welcome');
// })->name('welcome');
