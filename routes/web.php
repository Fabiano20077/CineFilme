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

Route::get('/contatos', function() {
        return view('/admin/contatosViu');
});

Route::get('/', 'App\Http\Controllers\FilmeController@indexHome');

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/sobre', function () {
    return view('/usuario/sobre');
});

Route::get('/filmes', 'App\Http\Controllers\FilmeController@index');
