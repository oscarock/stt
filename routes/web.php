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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/load_deparments', 'Auth\RegisterController@load_deparments');
Route::get('/load_towns/{id_deparment}', 'Auth\RegisterController@load_towns');

Route::get('/prueba',function(){
	$towns = App\Town::where('department_id', '=', 11)->get();
	var_dump($towns);
});
