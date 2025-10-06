<?php

use App\Http\Controllers\FilmeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\admFilmeController;
use App\Http\Controllers\salaController;
use App\Http\Controllers\generoController;
use App\Http\Controllers\ContatoController;


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

Route::middleware('web')->group(function () {
    // adm
    Route::get('/adm', [AdmFilmeController::class, 'index']);
    Route::get('/addfilme', [GeneroController::class, 'index']);
    Route::post('/addFilmes', [FilmeController::class, 'store']);
    Route::get('/addsala', [SalaController::class, 'index']);
    Route::post('/sala-insert', [SalaController::class, 'store']);

    // usuario
    Route::view('/login1', 'login');
    Route::view('/cadastro', 'cadastro');
    Route::post('/cadastro', [UsuarioController::class, 'store']);
    Route::post('/fazerLogin', [UsuarioController::class, 'fazerLogin']); // POST, não GET
    Route::get('/sair', [UsuarioController::class, 'fazerLogout']);

    Route::get('/', [FilmeController::class, 'indexHome'])->name('home');
    Route::get('/filmes', [FilmeController::class, 'index']);
    Route::get('/sobre', fn() => view('usuario.sobre'));

    // perfil com proteção Auth
    Route::middleware('auth')->group(function () {
        Route::get('/perfil/{id}', [UsuarioController::class, 'show']);
        Route::get('/perfil-edit/{id}', [UsuarioController::class, 'edit']);
        Route::post('/perfil-update/{id}', [UsuarioController::class, 'update']);
        Route::get('/perfil-delete/{id}', [UsuarioController::class, 'destroy']);
    });

    // ingressos
    Route::get('/ingressos/{id}', [FilmeController::class, 'filmeIngressos']);
    Route::get('/comprar-ingresso/{id}', [FilmeController::class, 'addCadeira']);

    // contato
    Route::get('/contatos', [ContatoController::class, 'index']);
    Route::post('/contatos-insert', [ContatoController::class, 'store']);

    Route::get('/teste-auth', function () {
    return [
        'auth_check' => Auth::check(),
        'user' => Auth::user(),
        'session_id' => session()->getId(),
        'session_data' => session()->all(),
    ];
})->middleware('web');
});
