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
    public function pdfTudo()
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

        $pdf = PDF::loadView('pdf.relatorioDash', [
            'usuarios' => $usuarios,
            'filmes' => $filmes,
            'ingressos' => $ingressos,
            'generosProcurados' => $generosProcurados
        ])->setPaper('a4', 'portrait');

        return  $pdf->download('relatorioDash.pdf');
    }

    public function pdfGenero()
    {

        $generosProcurados = DB::table('ingresso')
            ->join('sala', 'ingresso.idSala', '=', 'sala.idSala')
            ->join('filme', 'sala.idFilme', '=', 'filme.idFilme')
            ->select('filme.genero', DB::raw('COUNT(*) AS totalIngressos'))
            ->groupBy('filme.genero')
            ->orderBy('totalIngressos', 'desc')
            ->get();

        $pdf = PDF::loadView('pdf.pdfGenero', [
            'generosProcurados' => $generosProcurados
        ])->setPaper('a4', 'portrait');

        return  $pdf->download('pdfGenero.pdf');
    }

    public function PdfGrafico()
    {

        $filmeProcurados = DB::table('ingresso')
            ->join('sala', 'ingresso.idSala', '=', 'sala.idSala')
            ->join('filme', 'sala.idFilme', '=', 'filme.idFilme')
            ->select('filme.titulo', DB::raw('COUNT(*) AS totalFilmes'))
            ->groupBy('filme.titulo')
            ->orderBy('totalFilmes', 'desc')
            ->get();

        $pdf = PDF::loadView('pdf.relatorioGrafico', [
            'filmeProcurados' => $filmeProcurados
        ])->setPaper('a4', 'portrait');

        return $pdf->download('relatorioGrafico.pdf');
    }

    public function csvGenero()
    {
        $generosProcurados = DB::table('ingresso')
            ->join('sala', 'ingresso.idSala', '=', 'sala.idSala')
            ->join('filme', 'sala.idFilme', '=', 'filme.idFilme')
            ->select('filme.genero', DB::raw('COUNT(*) AS totalIngressos'))
            ->groupBy('filme.genero')
            ->orderBy('totalIngressos', 'desc')
            ->get();

        $filename = "generos_ingressos_" . date('Ymd_His') . ".csv";

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $columns = ['Genero', 'Total de Ingressos'];

        $callback = function () use ($generosProcurados, $columns) {
            $file = fopen('php://output', 'w');

            fputcsv($file, $columns);


            foreach ($generosProcurados as $row) {
                fputcsv($file, [
                    $row->genero,
                    $row->totalIngressos
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function csvGrafico()
    {
        $filmeProcurados = DB::table('ingresso')
            ->join('sala', 'ingresso.idSala', '=', 'sala.idSala')
            ->join('filme', 'sala.idFilme', '=', 'filme.idFilme')
            ->select('filme.titulo', DB::raw('COUNT(*) AS totalFilmes'))
            ->groupBy('filme.titulo')
            ->orderBy('totalFilmes', 'desc')
            ->get();

        $filename = "filmes_ingressos_" . date('Ymd_His') . ".csv";

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $columns = ['Titulo do Filme', 'Total de Ingressos'];

        $callback = function () use ($filmeProcurados, $columns) {
            $file = fopen('php://output', 'w');

            fputcsv($file, $columns);


            foreach ($filmeProcurados as $row) {
                fputcsv($file, [
                    $row->titulo,
                    $row->totalFilmes
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
