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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kelas','KelasController');
// type write route::recosurce('nameUrl', 'nameController');

Route::resource('siswa', 'SiswaController');
Route::resource('task', 'TaskController');
Route::get('task/create', 'TaskController@create');
Route::post('/savetask', 'TaskController@store');
Route::get('/detail/{id}', 'TaskController@detail');
// Route::get('/edit/{id}', 'TaskController@edit');
Route::get('/delete/{id}', 'TaskController@delete');

Route::view('/tampilan', 'template.dashboard');