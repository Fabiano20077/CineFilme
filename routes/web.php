<?php

use App\Http\Controllers\admCotroller;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\admFilmeController;
use App\Http\Controllers\salaController;
use App\Http\Controllers\generoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\pdfController;
use App\Models\admModel;
use Illuminate\Contracts\View\View;
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

Route::get('/loginAdm', function () {
    return view('loginAdm');
})->name('loginAdm');

Route::get('/cadaAdm', function () {
    return view('cadaAdm');
});

Route::post('/xii', [admCotroller::class, 'store']);

Route::post('/fazerLOginAdm', [admCotroller::class, 'loginAdm']);

Route::middleware('auth:admin')->group(function () {


    Route::get('/adm', [AdmFilmeController::class, 'index']);
    Route::get('/verfilme', [GeneroController::class, 'index'])->name('verFilme');
    Route::get('/addfilme', [generoController::class, 'addFilme'])->name('addFilme');
    Route::post('/addFilmes', [FilmeController::class, 'store']);
    Route::get('/editaFilme/{id}', [admCotroller::class, 'editFilme'])->name('editarFilme');
    Route::post('/updateFilme/{id}', [admCotroller::class, 'updateFilme'])->name('updateFilme');
    Route::get('/addsala', [SalaController::class, 'index'])->name('addSala');
    Route::post('/sala-insert', [SalaController::class, 'store']);
    Route::get('/contatos', [ContatoController::class, 'index'])->name('contatos');
    Route::get('/dashboard', [generoController::class, 'GenerosProcurados'])->name('dashboard');
    Route::get('/pdfGeneros',[pdfController::class, 'pdfGenero'])->name('pdfGenero');
    Route::get('/relatorioGrafico',[pdfController::class, 'PdfGrafico'])->name('PdfGrafico');
    

    Route::get('/logoutAdm', [admCotroller::class, 'logoutAdm'])->name('logoutAdm');
    Route::get('/destroyAdm/{id}', [admCotroller::class, 'destroyAdm'])->name('deleteAdm');

    Route::get('/buscarFilme', [admCotroller::class, 'buscarFilme'])->name('buscarFilme');
});

Route::view('/login1', 'login');
Route::view('/cadastro', 'cadastro');
Route::post('/cadastro', [UsuarioController::class, 'store']);
Route::post('/fazerLogin', [UsuarioController::class, 'fazerLogin']);

Route::middleware('web')->group(function () {
    // usuario

    Route::get('/sair', [UsuarioController::class, 'fazerLogout']);

    Route::get('/', [FilmeController::class, 'indexHome'])->name('home');
    Route::get('/filmes', [FilmeController::class, 'index']);
    Route::get('/sobre', fn() => view('usuario.sobre'));

    Route::get('/perfil/{id}', [UsuarioController::class, 'show']);
    // perfil com proteção Auth
    Route::middleware('auth')->group(function () {
        Route::get('/perfil-edit/{id}', [UsuarioController::class, 'edit']);
        Route::post('/perfil-update/{id}', [UsuarioController::class, 'update']);
        Route::get('/perfil-delete/{id}', [UsuarioController::class, 'destroy']);
    });

    // ingressos
    Route::get('/ingressos/{id}', [FilmeController::class, 'filmeIngressos']);
    Route::get('/comprar-ingresso/{id}', [FilmeController::class, 'addCadeira']);

    // contato

    Route::post('/contatos-insert', [ContatoController::class, 'store']);
});
