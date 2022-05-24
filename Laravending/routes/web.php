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
    $productos->sortBy("id");
    return view('productos', array('listado'=>$productos));
})->middleware('auth');

Route::get('/detalle', function () {
    return view('detalle');
});

Route::get('/consulta/{id}', function ($id) {
    $producto = App\Models\products::where('id',$id)->get();
    $precio = App\Models\products::where('id',$id)->get('precio');
    return view('detalle', array('producto'=>$producto[0]));
});

Route::put('/compraRealizada/{precio}', function ($precio) {
    return $precio;
    return view('compraRealizada');
});

Route::post('/acceso', [userController::class, 'acceder'])->name('login');

Route::post('/logout', [userController::class, 'logout'])->name('logout');
