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

/*Route::get('/', function () {
    return view('home');
});*/

//Route::view('/', 'pacientes')->name('pacientes');

Route::get('/lay', function () {
    return view('layout');
});

Route::get('/', 'PacienteController@index')->name('pacientes');

Route::get('/crear', 'PacienteController@create')->name('nuevoPaciente');

Route::post('/crear', 'PacienteController@store')->name('nuevoPaciente');

Route::get('/{paciente}/editar', 'PacienteController@edit')->name('editarPaciente');
Route::patch('/{paciente}/editar', 'PacienteController@update')->name('actualizarPaciente');

Route::delete('/{paciente}', 'PacienteController@destroy')->name('eliminarPaciente');