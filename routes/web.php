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

Route::get('/', 'ElectorController@index')->name('h');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/add-puesto', 'HomeController@storelectivop')->name('add-puesto');

Route::put('/edit-puesto/{id}', 'HomeController@editpuesto')->name('edit-puesto');

Route::get('/ciudadano','HomeController@ciudadano')->name('ciudadano');

Route::post('/ciudadano','HomeController@ciudadanostore')->name('ciudadano-add');

Route::put('/ciudadano-edit/{id}','HomeController@ciudadanoedit')->name('ciudadano-edit');

Route::delete('/ciudadano-delete/{id}','HomeController@ciudadanodelete')->name('ciudadano-delete');

Route::get('partido', 'HomeController@partido')->name('partido');

Route::post('partido', 'HomeController@partidostore')->name('partido-add');

Route::put('partido-edit/{id}', 'HomeController@partidoedit')->name('partido-edit');

Route::get('candidato', 'HomeController@candidato')->name('candidato');

Route::post('candidato-add', 'HomeController@candidatoadd')->name('candidato-add');

Route::put('candidato-edit/{id}', 'HomeController@candidatoedit')->name('candidato-edit');

Route::delete('candidatos-delete/{id}', 'HomeController@candidatosdelete')->name('candidatos-delete');

Route::get('elecciones','HomeController@elecciones')->name('elecciones');

Route::post('elecciones','HomeController@eleccionestore')->name('elecciones-app');

Route::put('elecciones-edit/{id}','HomeController@eleccionedit')->name('elecciones-edit');


Route::get('proceso/{id}', 'ElectorController@nivel')->name('nivel');

Route::get('votar/{id}', 'ElectorController@voto')->name('votar');





