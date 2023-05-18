<?php

use App\Http\Controllers\RegisterController;
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
    return view('principal');
});

Route::get('/alumnos', function () {
    return view('alumnos');
});

Route::get('/curriculum', function () {
    return view('curriculum');
});


// Ruta para el registro de usuarios
Route::get('/crear-cuenta', [RegisterController::class,'index']);


