<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/clientes', function () {
    return view('customers');
})->name('customers');
