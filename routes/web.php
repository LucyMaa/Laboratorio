<?php

use Illuminate\Routing\Route as RoutingRoute;
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
    return view('homepage');
});


Route::get('/sidebar', function () {
    return view('Layout');
})->name('sidebar');


Route::get('/prueba', function () {
    return view('Login/login');
});

Route::get('/home', 'HomeController@index')->name('home');

//MEDICOS
route::get('/Medico','MedicoController@index')->name('Medico.index');
route::get('Medico/create','MedicoController@create')->name('Medico.create');
route::post('Medico/store','MedicoController@store')->name('Medico.store');
route::get('Medico/{id}','MedicoController@show')->name('Medico.show');
route::get('Medico/edit/{id}','MedicoController@edit')->name('Medico.edit');
route::put('Medico/update/{id}','MedicoController@update')->name('Medico.update');
route::delete('Medico/{id}','MedicoController@destroy')->name('Medico.destroy');




//usuarios
route::get('/usuarios','UserController@index')->name('usuario.index');
route::get('usuarios/create','UserController@create')->name('usuario.create');
route::post('usuarios','UserController@store')->name('usuario.store');
route::get('usuarios/{id}','UserController@show')->name('usuario.show');
route::get('usuarios/{id}/edit','UserController@edit')->name('usuario.edit');
route::put('usuarios/{id}','UserController@update')->name('usuario.update');
route::delete('usuarios/{id}','UserController@destroy')->name('usuario.destroy');



Route::get('/home', 'HomeController@index')->name('home');
