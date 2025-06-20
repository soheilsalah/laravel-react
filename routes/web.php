<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', ['name' => 'John Doe']);
});

// Route::get('/', function () {
//     return inertia('Home');
// });

// Route::inertia('/', 'Home');
