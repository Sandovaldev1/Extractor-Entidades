<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntityExtractionController;


/* 
| Rutas principales para las vistas de nuestra aplicación
| 
| Aquí definimos las rutas para las páginas principales de la aplicación,
| así como las rutas para manejar las solicitudes POST para la extracción de entidades.
|
*/

Route::get('/', function () {
    return view('entities');
});


Route::post('/extract-entities', [EntityExtractionController::class, 'extractEntities']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});