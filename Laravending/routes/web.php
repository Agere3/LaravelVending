<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('/acceso');
})->middleware('guest');

Route::get('/acceso', function () {
    return view('acceso');
})->middleware('guest');

Route::get('/productos', function () {
    $productos = App\Models\products::all();
    return view('productos', array('username'=>"patata",'listado'=>$productos));
})->middleware('auth');

Route::get('/detalle', function () {
    return view('detalle');
});

Route::get('/consulta/{id}', function () {
    $producto = App\Models\products::where('id',1)->get();
    return view('detalle', array('producto'=>$producto[0]));
});

Route::post('/compraRealizada', function () {
    return view('compraRealizada');
});


Route::post('/acceso', [userController::class, 'acceder'])->name('login');

Route::post('/logout', [userController::class, 'logout'])->name('logout');
