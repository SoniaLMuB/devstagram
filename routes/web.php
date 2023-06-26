<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ComentarioController;

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

//FORMA DOS DE DEFINIR UNA RUTA 
//Ruta para vista de alumno
// Route::view('/alumnos','alumnos');

// Route::view('/curriculum','curriculum');
//Ruta para vista de registrar
Route::get('/crear',[RegisterController::class,'index'])->name("register");

//Ruta para enviar datos al servidor
Route::post('/crear',[RegisterController::class,'store']);

// Ruta para mostrar el deshboard del usuario autenticado
// Route::get('/muro',[PostController::class,'index'])->name("post.index");

//Ruta paa login
Route::get('/login',[LoginController::class,'index'])->name("login");

//Ruta de validación de login
Route::post('/login',[LoginController::class,'store']);

//Ruta de Logout
Route::post('/logout',[LogoutController::class,'store'])->name("logout"); 

//Rota para formulario de Publicaciones
Route::get('post/create',[PostController::class,'create'])->name("post.create");

//Rota para almacenar post
Route::post('/posts',[PostController::class,'store'])->name('post.store');

//Ruta para cargar imagenes
Route::post('/imagenes',[ImagenController::class,'store'])->name("imagenes.store");



//Ruta para mostrar las imagenes 
Route::get('/{user:username}/posts/{post}', [PostController::class, 'show'])->name("post.show");

// Ruta de Publicar comentarios
Route::post('/{user:username}/posts/{post}', [ComentarioController::class, 'store'])->name('comentarios.store');

//Ruta para eliminar comentario (solo la persona que lo relicé será la que lo puede eliminar) se especifica que será con el 
//metodo eliminar
Route::delete('/{user:username}/posts/{post}/comentario/{comentario}',[ComentarioController::class,'eliminar'])->name("comentarios.eliminar");

//Ruta para mostrar el dashboard del usuario autenticado con userrname en URL, se agrega al final para 
Route::get('/{user:username}',[PostController::class,'index'])->name("post.index");

