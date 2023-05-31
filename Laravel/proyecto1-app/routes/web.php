<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductoController;
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

Route::get('/crearCuenta', [RegisterController::class,'index'])->name('register');
Route::post('/crearCuenta', [RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/',[ProductoController::class,'index'])->name('product');
Route::get('/prduct/create',[ProductoController::class,'create'])->name('product.create');
Route::post('/prduct/create',[ProductoController::class,'store'])->name('product.store');
Route::delete('/product/{producto}', [ProductoController::class, 'destroy'])->name('product.destroy');
