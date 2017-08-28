<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/clientes', function () {
    return view('customers');
})->name('customers');

Route::get('/infraestrutura-de-redes', function () {
    return view('network-infrastructure');
})->name('network-infrastructure');
