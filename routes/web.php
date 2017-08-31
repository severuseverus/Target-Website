<?php

Route::get('/', function () {
    return view('temporary-home');
})->name('tpm-home');

Route::get('/new', function () {
    return view('home');
})->name('home');

Route::get('/clientes', function () {
    return view('customers');
})->name('customers');

Route::get('/infraestrutura-de-redes', function () {
    return view('solutions.network-infrastructure');
})->name('network-infrastructure');

Route::get('/redes-eletricas', function () {
    return view('solutions.electric-networks');
})->name('electric-networks');

Route::get('/seguranca-eletronica', function () {
    return view('solutions.electronic-security');
})->name('electronic-security');

Route::get('/telecomunicacoes', function () {
    return view('solutions.telecommunications');
})->name('telecommunications');

Route::get('/parceiros-comerciais', function () {
    return view('partners.commercial');
})->name('commercial-partners');

Route::get('/parceiros-tecnologicos', function () {
    return view('partners.technological');
})->name('technological-partners');

Route::get('cases', function () {
    return view('cases');
})->name('cases');

Route::get('contato', function () {
    return view('contact');
})->name('contact');