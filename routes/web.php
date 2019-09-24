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
Auth::routes();
Route::get('/', function () {
    return view('home');
    
    

});
Route::get('/home', 'HomeController@index')->name('home');



Route::get('/cadastroFornecedor', 'fornecedorController@index')->name('cadastroFornecedor');
Route::get('/fornecedor/create','fornecedorController@create');
Route::post('/cadastroFornecedor', 'fornecedorController@store');
Route::get('/cadastrocliente', 'clienteController@index')->name('cadastrocliente');
Route::get('/cliente/create','clienteController@create');
Route::post('/cadastrocliente', 'clienteController@store');


//php artisan key:generate
//composer dump-autoload
//php artisan migrate --seed



