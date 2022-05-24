<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acceso', function () {
    return view('acceso');
})->middleware('guest');

Route::get('/productos', function () {
    return view('productos');
})->middleware('auth');

Route::get('/detalle/{id}', function () {
    return view('detalle');
});

Route::get('/compraRealizada', function () {
    return view('compraRealizada');
});


Route::post('/acceso', [userController::class, 'acceder'])->name('login');

Route::post('/logout', [userController::class, 'logout'])->name('logout');
