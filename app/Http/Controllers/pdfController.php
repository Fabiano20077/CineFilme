<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filmeModel;
use App\Models\User as usuario;
use App\Models\ingressoModel as ingresso;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\DB;

class pdfController extends Controller
{
    public function pdfGenero()
    {
        $usuarios = usuario::count();
        $filmes = filmeModel::count();
        $ingressos = ingresso::count();

        $generosProcurados = DB::table('ingresso')
            ->join('sala', 'ingresso.idSala', '=', 'sala.idSala')
            ->join('filme', 'sala.idFilme', '=', 'filme.idFilme')
            ->select('filme.genero', DB::raw('COUNT(*) AS totalIngressos'))
            ->groupBy('filme.genero')
            ->orderBy('totalIngressos', 'desc')
            ->get();

            $pdf = PDF::loadView('admin.pdfGenero', [
                'usuarios' => $usuarios,
                'filmes' => $filmes,
                'ingressos' => $ingressos,
                'generosProcurados' => $generosProcurados
            ])->setPaper('a4', 'portrait');

          return  $pdf->download('pdfGenero.pdf');
    }
}
