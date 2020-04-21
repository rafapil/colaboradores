<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// rotas para funçoes adm v1

Route::get('/home/admin', 'AdminController@lista')->name('admin');
// Route::get('/home/admin', 'AdminController@cadastroCargo')->name('admin');
// Route::post('/home/admin', 'AdminController@cadastroCargo')->name('admin');
// Rota para cadastro de gestao do funcionario
Route::post('/cargo/cad', 'AdminController@cadastroCargo');
Route::post('/tribo/cad', 'AdminController@cadastroTribo');

Route::post('/squad/cad', 'AdminController@cadastroSquad'); //
Route::post('/centocusto/cad', 'AdminController@cadastroCentroCusto'); //
Route::post('/estabelecimento/cad', 'AdminController@cadastroEstabelecimento'); //
Route::post('/empresa/cad', 'AdminController@cadastroEmpresa'); //
