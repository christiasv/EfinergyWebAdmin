<?php

use Illuminate\Support\Facades\Route;

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


/*Login*/
Route::view('/login','login')->name('login');
Route::view('/registro','register')->name('register');
Route::view('/privada','secret')->middleware('auth')->name('secret');

Route::post('/validar-registro',[\App\Http\Controllers\LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[\App\Http\Controllers\LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout',[\App\Http\Controllers\LoginController::class,'logout'])->name('logout');

Route::get('/',function (){return view('login');});
/*Pagina web*/


/*Administrador web*/
Route::resource('/admin/index', \App\Http\Controllers\IndexController::class);
Route::resource('/admin/slide', \App\Http\Controllers\SlideController::class);
Route::resource('/admin/noticia', \App\Http\Controllers\NoticiaController::class);
Route::resource('/admin/proyecto', \App\Http\Controllers\ProyectoController::class);
Route::resource('/admin/blog', \App\Http\Controllers\BlogController::class);
Route::resource('/admin/evento', \App\Http\Controllers\EventoController::class);
Route::resource('/admin/contacto', \App\Http\Controllers\ContactoController::class);
