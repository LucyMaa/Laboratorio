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
//registrar medico
Route::get('/medicos/create', function () {
    return view('medico/create');
});
//INDEX
Route::get('medicos/index', function () {
    return view('medico/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
