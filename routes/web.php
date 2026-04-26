<?php


use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/about', function () {
    return view('quienesSomos');
});

Route::get('/comercializacion', function () {
    return view('comercializacion');
});

Route::get('/consultas', function () {
    return view('consultas');
});

Route::get('/terminos', function () {
    return view('terminos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', [ContactoController::class, 'procesar']);