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

/*Login*/
Route::get('/', function () {
    return view('auth/login');
});
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout' );

/*Pagina web*/


/*Administrador web*/
Route::post('/admin/slide/{cod}','\App\Http\Controllers\SlideController@update')->name("admin.slide.update");
//Route::resource('/admin/slide', \App\Http\Controllers\SlideController::class);
Route::resource('/admin/index', \App\Http\Controllers\IndexController::class);
Route::resource('/admin/slide', \App\Http\Controllers\SlideController::class);
Route::resource('/admin/noticia', \App\Http\Controllers\NoticiaController::class);
Route::resource('/admin/proyecto', \App\Http\Controllers\ProyectoController::class);
Route::resource('/admin/blog', \App\Http\Controllers\BlogController::class);
Route::resource('/admin/evento', \App\Http\Controllers\EventoController::class);
Route::resource('/admin/contacto', \App\Http\Controllers\ContactoController::class);
Route::resource('/seguridad/usuario', \App\Http\Controllers\UsersController::class);


