<?php

namespace App\Http\Controllers;

use App\Models\filmeModel;
use App\Models\User as usuario;
use App\Models\salaModel as sala;
use App\Models\ingressoModel as ingressos;
use Illuminate\Http\Request;
use App\Models\generoModel;
use Illuminate\Support\Facades\DB;

class generoController extends Controller
{
    public function index()
    {
        $generos = generoModel::all();
        $filme = filmeModel::all();
        return view('/admin.adicionarfilme', compact('generos','filme'));
    }

    public function addFilme()
    {
        $generos = generoModel::all();
        return view('/admin.addFilme', compact('generos'));
    }

   public function GenerosProcurados() 
   {
      $usuarios = usuario::count();
      $filmes = filmeModel::count();
      $ingressos = ingressos::count();

        $generosProcurados = DB::table('ingresso')
        ->join('sala', 'ingresso.idSala', '=', 'sala.idSala' )
        ->join('filme', 'sala.idFilme', '=', 'filme.idFilme')
        ->select('filme.genero', DB::raw('COUNT(*) AS totalIngressos'))
        ->groupBy('filme.genero')
        ->orderBy('totalIngressos', 'desc')
        ->get();

        $filmeProcurados = DB::table('ingresso')
        ->join('sala', 'ingresso.idSala', '=', 'sala.idSala')
        ->join('filme', 'sala.idFilme', '=', 'filme.idFilme')
        ->select('filme.titulo' ,DB::raw('COUNT(*) AS totalFilmes'))
        ->groupBy('filme.titulo')
        ->orderBy('totalFilmes', 'desc')
        ->get();

      

        return view('admin.dashboard', compact('generosProcurados', 'usuarios', 'filmes', 'ingressos','filmeProcurados'));
   }
}
