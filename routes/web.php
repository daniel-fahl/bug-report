<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form', 'form');
Route::post('/form', function () {
    back()->withErrors(['name' => 'The name is invalid.']);
});
