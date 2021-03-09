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

//login va ser la raiz--------------------------------------------------

Route::get('/','Auth\LoginController@showLoginForm')->name('showlogin');
route::post('/login','Auth\LoginController@login')->name('login');
route::post('/logout','Auth\LoginController@logout')->name('logout');
//--------------------------------------------------------------------
Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::get('/sidebar', function () {
    return view('Layout');
})->name('sidebar');



//MEDICOS
route::get('/Medico', 'MedicoController@index')->name('Medico.index');
route::get('Medico/create', 'MedicoController@create')->name('Medico.create');
route::post('Medico', 'MedicoController@store')->name('Medico.store');
route::get('Medico/{id}', 'MedicoController@show')->name('Medico.show');
route::get('Medico/{id}/edit', 'MedicoController@edit')->name('Medico.edit');
route::put('Medico/{id}', 'MedicoController@update')->name('Medico.update');
route::delete('Medico/{id}', 'MedicoController@destroy')->name('Medico.destroy');

//ADMINISTRADOR
route::get('/empleados', 'AdministradorController@index')->name('empleados.index');
route::get('empleados/create', 'AdministradorController@create')->name('empleados.create');
route::post('empleados', 'AdministradorController@store')->name('empleados.store');
route::get('empleados/{id}', 'AdministradorController@show')->name('empleados.show');
route::get('empleados/{id}/edit', 'AdministradorController@edit1')->name('empleados.edit');
route::get('empleados1/{id}', 'AdministradorController@update1')->name('empleados.update');
route::put('empleados1/{id}', 'AdministradorController@update1')->name('empleados.delete');
route::delete('empleados/{id}', 'AdministradorController@destroy')->name('empleados.destroy');

route::get('empleados2/{id}/edit', 'AdministradorController@edit')->name('empleados.edit1');
route::put('empleados2/{id}', 'AdministradorController@update')->name('empleados.update1');

//clientes o pacientes????
route::get('/pacientes', 'PacienteController@index')->name('pacientes.index');
route::get('pacientes/create', 'PacienteController@create')->name('pacientes.create');
route::post('pacientes', 'PacienteController@store')->name('pacientes.store');
route::get('clientes/{id}', 'PacienteController@show')->name('pacientes.show');
route::get('clientes/{id}/edit', 'PacienteController@edit')->name('pacientes.edit');
route::put('clientes/{id}', 'PacienteController@update')->name('pacientes.update');
route::delete('clientes/{id}', 'PacienteController@destroy')->name('pacientes.destroy');

//usuarios
route::get('/usuarios','UsuarioController@index')->name('usuario.index');
route::get('usuarios/create','UsuarioController@create')->name('usuario.create');
route::post('usuarios','UsuarioController@store')->name('usuario.store');
route::get('usuarios/{id}','UsuarioController@show')->name('usuario.show');
route::get('usuarios/{id}/edit','UsuarioController@edit')->name('usuario.edit');
route::put('usuarios/{id}','UsuarioController@update')->name('usuario.update');
route::delete('usuarios/{id}','UsuarioController@destroy')->name('usuario.destroy');

//examenes
route::get('/examenes','ExamenController@index')->name('examenes.index');
route::get('examenes/create','ExamenController@create')->name('examenes.create');
route::post('examenes','ExamenController@store')->name('examenes.store');
route::get('examenes/{id}','ExamenController@show')->name('examenes.show');
route::get('examenes/{id}/edit','ExamenController@edit')->name('examenes.edit');
route::put('examenes/{id}','ExamenController@update')->name('examenes.update');
route::delete('examenes/{id}','ExamenController@destroy')->name('examenes.destroy');

//turnos
route::get('/turnos','TurnoController@index')->name('turnos.index');
route::get('turnos/create','TurnoController@create')->name('turnos.create');
route::get('turnos/asignar/create','TurnoController@asignar')->name('turnos.asignar');
route::post('turnos/asignar','TurnoController@asignarStore')->name('turnos.asignarStore');
route::get('turnos/{id}/registrados','TurnoController@registrados')->name('turnos.registrados');
route::post('turnos','TurnoController@store')->name('turnos.store');
route::get('turnos/{id}','TurnoController@show')->name('turnos.show');
route::get('turnos/{id}/edit','TurnoController@edit')->name('turnos.edit');
route::put('turnos/{id}','TurnoController@update')->name('turnos.update');
route::delete('turnos/{id}','TurnoController@destroy')->name('turnos.destroy');

//Muestras
route::get('/muestras','MuestraController@index')->name('muestras.index');
route::get('muestras/create','MuestraController@create')->name('muestras.create');
route::post('muestras','MuestraController@store')->name('muestras.store');
route::get('muestras/{id}','MuestraController@show')->name('muestras.show');
route::get('muestras/{id}/edit','MuestraController@edit')->name('muestras.edit');
route::put('muestras/{id}','MuestraController@update')->name('muestras.update');
route::delete('muestras/{id}','MuestraController@destroy')->name('muestras.destroy');

//inventario
route::get('/inventarios','InventarioController@index')->name('inventarios.index');
route::get('inventarios/create','InventarioController@create')->name('inventarios.create');
route::post('inventarios','InventarioController@store')->name('inventarios.store');
route::get('inventarios/{id}','InventarioController@show')->name('inventarios.show');
route::get('inventarios/{id}/edit','InventarioController@edit')->name('inventarios.edit');
route::put('inventarios/{id}','InventarioController@update')->name('inventarios.update');
route::delete('inventarios/{id}','InventarioController@destroy')->name('inventarios.destroy');

//proveedores
route::get('/proveedores','ProveedorController@index')->name('proveedores.index');
route::get('proveedores/create','ProveedorController@create')->name('proveedores.create');
route::post('proveedores','ProveedorController@store')->name('proveedores.store');
route::get('proveedores/{id}','ProveedorController@show')->name('proveedores.show');
route::get('proveedores/{id}/edit','ProveedorController@edit')->name('proveedores.edit');
route::put('proveedores/{id}','ProveedorController@update')->name('proveedores.update');
route::delete('proveedores/{id}','ProveedorController@destroy')->name('proveedores.destroy');

//compras
route::get('/compras','ProveedorInventarioController@index')->name('compras.index');
route::get('compras/create','ProveedorInventarioController@create')->name('compras.create');
route::post('compras','ProveedorInventarioController@store')->name('compras.store');
route::get('compras/{id}','ProveedorInventarioController@show')->name('compras.show');
route::get('compras/{id}/edit','ProveedorInventarioController@edit')->name('compras.edit');
route::put('compras/{id}','ProveedorInventarioController@update')->name('compras.update');
route::delete('compras/{id}','ProveedorInventarioController@destroy')->name('compras.destroy');

route::get('/home', 'HomeController@index')->name('HOME');

//INVENTARIO
//route::get('/inventarios','InventarioController@index')->name('inventario.index');
//route::get('/inventarios/create','InventarioController@create')->name('inventario.create');
//route::post('inventarios','InventarioController@store')->name('inventario.store');

//facturas
route::get('/factura','FacturaController@index')->name('factura.index');
route::post('/factura/prueba','FacturaController@prueba')->name('factura.prueba');

//bitacorA
route::get('/bitacoras','BitacoraController@index')->name('bitacoras.index');
route::get('bitacoras/create','BitacoraController@create')->name('bitacoras.create');
route::post('bitacoras','BitacoraController@store')->name('bitacoras.store');
