<?php

use App\Http\Controllers\FilmeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// adm
Route::get('/adm','App\Http\Controllers\admFilmeController@index');

Route::get('/addfilme', 'App\Http\Controllers\generoController@index');

Route::post('/addFilmes', 'App\Http\Controllers\FilmeController@store');

Route::get('/contatos', 'App\Http\Controllers\ContatoController@index');

Route::get('/addsala',  'App\Http\Controllers\salaController@index');

Route::post('/sala-insert', 'App\Http\Controllers\salaController@store' );

//usuario 

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::post('/cadastro', 'App\Http\Controllers\UsuarioController@store');

Route::get('/fazerLogin', 'App\Http\Controllers\UsuarioController@fazerLogin');

Route::get('/sair', 'App\Http\Controllers\UsuarioController@fazerLogout');

Route::post('/contatos-insert', 'App\Http\Controllers\ContatoController@store');

Route::get('/', 'App\Http\Controllers\FilmeController@indexHome');

Route::get('/sobre', function () {
    return view('/usuario/sobre');
});

Route::get('/filmes', 'App\Http\Controllers\FilmeController@index');

Route::get('/perfil/{id}', 'App\Http\Controllers\UsuarioController@show');

Route::get('/perfil-delete{id}', 'App\Http\Controllers\UsuarioController@destroy');

Route::get('/perfil-edit/{id}', 'App\Http\Controllers\UsuarioController@edit');

Route::post('/perfil-update/{id}', 'App\Http\Controllers\UsuarioController@update');

Route::get('/ingressos/{id}', 'App\Http\Controllers\FilmeController@filmeIngressos');

Route::get('/comprar-ingresso/{id}', [FilmeController::class, 'addCadeira']);

