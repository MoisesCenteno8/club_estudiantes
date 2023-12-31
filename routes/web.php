<?php

use App\Http\Controllers\IntegrantesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('template');
});

Route::get('/integrantes', [IntegrantesController::class, 'index'])->name('integrantes');

Route::get('/formulario', [IntegrantesController::class, 'getForm']);

Route::post('/inscripcion',[IntegrantesController::class,'store'])->name('inscripcion');

// post, put o delte => token (es necesario una key o token) 