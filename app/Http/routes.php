<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','Frontcontroller@index');
Route::get('mariecurie','Frontcontroller@mariecurie');
Route::get('servicios','Frontcontroller@servicios');
Route::get('noticias','Frontcontroller@noticias');
Route::get('galeria','Frontcontroller@galeria');
Route::get('contacto','Frontcontroller@contacto');
Route::get('admin','Frontcontroller@admin');
Route::get('promo','Frontcontroller@promos');
Route::resource('promos','promociones');
Route::resource('paciente','pacientes');
Route::resource('post','post');



