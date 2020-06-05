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
    return view('welcome');
});
//Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lendarios', 'lendario_Controller@index')->name('lendarios');
Route::get('/historia', 'historia_Controller@index')->name('historia');
Route::get('/sedes', 'sedes_Controller@index')->name('sedes');
Route::get('/eventos', 'eventos_Controller@index')->name('eventos');
Route::get('/calendario', 'calendario_Controller@index')->name('calendario');
Route::get('/wellcome', 'wellcome_Controller@index')->name('wellcome');

Route::resource('sede', 'sede_controller')->middleware('auth');
Route::resource('viagem', 'viagem_controller')->middleware('auth');
Route::get('viagem_pdf/{id}' , 'viagem_controller@print')->name('viagem_pdf')->middleware('auth');
Route::resource('/membro', 'membro_Controller')->middleware('auth');
Route::get('membro_pdf/{id}' , 'membro_Controller@print')->name('membro_pdf')->middleware('auth');
Route::resource('/cargo', 'cargo_controller')->middleware('auth');

