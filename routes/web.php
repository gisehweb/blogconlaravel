<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


/* metodo get recibe dos parametros la url el nombre de nuestro dominio, 
se retorna la vista welcome*/ 
//rutas de este proyecto
//Welcome
//Contacto
//Blog
//Sobre mi
Route::get('/', function () {
    return view('welcome');
});
Route::view('/', '/welcome')->name ('home');
Route::view('/contact', 'contact')->name ('contact');
Route::get('/blog', [PostController::class, 'index'])-> name('blog');

Route::view('/about', 'about')->name('about');
