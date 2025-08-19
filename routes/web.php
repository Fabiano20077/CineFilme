<?php

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
Route::get('/adm', function() {
    return view('/admin/adm');
});

Route::get('/contatos', 'App\Http\Controllers\ContatoController@index');


//usuario 

Route::post('/cadastro', 'App\Http\Controllers\UsuarioController@store');

Route::get('/fazerLogin', 'App\Http\Controllers\UsuarioController@fazerLogin');

Route::get('/sair', 'App\Http\Controllers\UsuarioController@fazerLogout');

Route::post('/contatos-insert' , 'App\Http\Controllers\ContatoController@store');

Route::get('/', 'App\Http\Controllers\FilmeController@indexHome');

Route::get('/login', function() {
    return view('login');
});

Route::get('/cadastro', function() {
    return view('cadastro');
});

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/sobre', function () {
    return view('/usuario/sobre');
});

Route::get('/filmes', 'App\Http\Controllers\FilmeController@index');
