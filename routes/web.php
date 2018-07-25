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
    return view('home');
});


Route::post('/salvar', 'ClientesController@salvar');
Route::delete('clientes/{cliente}', 'ClientesController@deletar');
Auth::routes();

Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
});
Route::match(['get'], 'salvar', function(){
    return redirect('/');
});
Route::group(['middleware' => ['auth']], function() {
    Route::get('clientes', 'ClientesController@index');
});

Route::get('/home', 'HomeController@index')->name('home');