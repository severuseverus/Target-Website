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

Route::get('/empresa', function () {
    return view('company');
})->name('company');

Route::get('/infraestrutura-de-redes', function () {
    return view('solutions.network-infrastructure');
})->name('network-infrastructure');

Route::get('/rede-premium', function () {
    return view('solutions.premium-networks');
})->name('premium-networks');

Route::get('/seguranca-eletronica', function () {
    return view('solutions.electronic-security');
})->name('electronic-security');

Route::get('/tecnologia-da-informacao', function () {
    return view('solutions.information-technology');
})->name('information-technology');

Route::get('/movimentos-e-mudancas', function () {
    return view('solutions.moves-and-changes');
})->name('moves-and-changes');

Route::get('/service-desk', function () {
    return view('solutions.service-desk');
})->name('service-desk');

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