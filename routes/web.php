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
    return view('default');
});

Route::get('/calendario', function () {
    return view('calendario');
});

// Route::get('usuarios', function () {
//     return view('usuarios');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios', 'UsuarioController@lista')->name('usuarios');
Route::post('/usuarios/cad', 'UsuarioController@create'); // funciona normal eu que fiz besteira sem usar a criptografia
Route::get('/usuarios/delete/{id}', 'UsuarioController@delete');

Route::resource('/gestao', 'GestaoController');

Route::resource('/usuario', 'UsuarioPessoalController');

Route::resource('/colaborador', 'ColaboradorController');

Route::resource('escala', 'EscalaPlantaoController');

Route::resource('plantao', 'PlantaoController');
Route::post('/insert', 'PlantaoController@insert');
Route::get('/delete/plantao/{id}', 'PlantaoController@delete');

// rotas para funçoes adm v1
Route::get('/home/admin', 'AdminController@lista')->name('admin');
// Rota para cadastro de gestao do funcionario
Route::post('/cargo/cad', 'AdminController@cadastroCargo');
Route::get('/cargo/del/{id}', 'AdminController@delCargo');
Route::post('/tribo/cad', 'AdminController@cadastroTribo');
Route::get('/tribo/del/{id}', 'AdminController@delTribo');
Route::post('/squad/cad', 'AdminController@cadastroSquad');
Route::get('/squad/del/{id}', 'AdminController@delSquad');
Route::post('/centocusto/cad', 'AdminController@cadastroCentroCusto');
Route::get('/centocusto/del/{id}', 'AdminController@delCusto');
Route::post('/estabelecimento/cad', 'AdminController@cadastroEstabelecimento');
Route::get('/estabelecimento/del/{id}', 'AdminController@delEstabelecimento');
Route::post('/empresa/cad', 'AdminController@cadastroEmpresa');
Route::get('/empresa/del/{id}', 'AdminController@delEmpresa');
