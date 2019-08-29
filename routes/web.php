<?php

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
    return redirect()->route('alumnos.index');
});


Route::resource('alumnos', 'AlumnoController');
Route::get('/add/alumnos', 'AlumnoController@add')->name('alumno.form');
Route::get('alumno/{id}/editar', 'AlumnoController@edit')->name('modalumno.form');
//Route::put('alumno/{id}', 'AlumnoController@update');
Route::get('alumno/{id?}/delete', 'AlumnoController@destroy');

Route::resource('maestros', 'MaestroController');
Route::get('/add/maestros', 'MaestroController@add')->name('maestro.form');
Route::get('maestro/{id}/editar', 'MaestroController@edit')->name('updmaestro.form');
Route::get('maestro/{id?}/editar', 'MaestroController@update');
Route::get('maestro/{id?}/delete', 'MaestroController@destroy');