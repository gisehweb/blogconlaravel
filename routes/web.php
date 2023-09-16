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

Route::get('/blog', [PostController::class, 'index'])-> name('posts.index');
Route::get('/blog/create',[PostController::class, 'create'])->name('posts.create');
Route::post('/blog',[PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');

Route::view('/about', 'about')->name('about');
