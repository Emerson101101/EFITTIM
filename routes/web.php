<?php

use App\Http\Controllers\TareaController;
use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

Route::get("/tarea", [TareaController::class,'index']);

Route::get('/vehiculos/show', [VehiculoController::class, 'index']); 
// Ruta para mostrar la vista create.blade.php
Route::get('/vehiculos/create', [VehiculoController::class, 'create']);
// Ruta para mostrar la vista update.blade.php
Route::get('/vehiculos/edit/{product}', [VehiculoController::class, 'edit']); 
// Ruta para insertar producto
Route::post('/vehiculos/store', [VehiculoController::class, 'store']); 
// Ruta para modificar producto
Route::put('/vehiculos/update/{product}', [VehiculoController::class, 'update']); 
// Ruta para eliminar producto
Route::delete('/vehiculos/destroy/{id}', [VehiculoController::class, 'destroy']);


Route::get('/', function () {
    return view('login');
});

Route::get('home', function (){
    return view('home');
});

Route::get('aceite/show', function (){
    return view('aceite/show');
});
Route::get('aceite/create', function (){
    return view('aceite/create');
});