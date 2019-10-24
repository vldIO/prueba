<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('respuesta', 'AlumnoController@devuelve');
Route::get('alumno', 'AlumnoController@index');
Route::post('alumnoST','AlumnoController@store');
Route::put('alumno/{id}','AlumnoController@update');
Route::delete('alumno/{id}','AlumnoController@destroy');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
