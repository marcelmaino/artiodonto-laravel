<?php

use Illuminate\Support\Facades\Route;

// Página inicial
Route::get('/', function () {
    return view('home');
})->name('home');

// A Clínica
Route::get('/a-clinica', function () {
    return view('a-clinica', ['isInternalPage' => true]);
})->name('a-clinica');

// Procedimentos
Route::get('/procedimentos', function () {
    return view('procedimentos', ['isInternalPage' => true]);
})->name('procedimentos');

// Arti Kids
Route::get('/arti-kids', function () {
    return view('arti-kids', ['isInternalPage' => true]);
})->name('arti-kids');

// Contato
Route::get('/contato', function () {
    return view('contato', ['isInternalPage' => true]);
})->name('contato');

// Obrigado
Route::get('/obrigado', function () {
    return view('obrigado', ['isInternalPage' => true]);
})->name('obrigado');
