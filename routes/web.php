<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//::class:  facilita obtener el nombre completo de la clase con su espacio de nombres.
//Route::get('/', ["App\Http\Controllers\HomeController", 'index']); //Ejemplo sin usar :: class

//Definir una ruta
Route::get('/', [HomeController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/{id}', [PostController::class, 'show']);


//PETICIONES

//GET: Cuando ponemos una uri o cuando damos clic en una funcion y nos dirige a algún lado
//POST : Cuando hacemos desde un formulario y deseamos enviar algo
//PUT :Actualizar algún registro, ENVIANDO TODOS LOS DATOS
//PATCH:Actualizar algún registro, NO ES NECESARIO ENVIAR TODOS LOS DATOS
//DELETE: ELIMINAR ALGUN REGISTRO

//Rutas con parametros

