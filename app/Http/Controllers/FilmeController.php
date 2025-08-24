<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\filmeModel;
use Illuminate\Support\Facades\Storage;
use App\Models\generoModel;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        /*   $apikey = env('TMDB_API_KEY');

        //é necessario configura para produção o ssl
        $response = Http::withoutVerifying()->get("https://api.themoviedb.org/3/movie/now_playing", [
            'api_key' => $apikey,
            'language' => 'pt-BR',
            'region' => 'BR'
        ]);



        $filmes = collect( $response->json()['results'])->map(function($filme) {
            return [
                'id' => $filme['id'],
                'titulo' => $filme['title'],
                'genero' => $filme['genre_ids'],
                'lancamento' => $filme['release_date'],
                'classificacao' => $filme['adult'],
                'poster' => $filme['poster_path'],
                'sinopser' => $filme['overview']
            ];
        }); */

        $filmes = filmeModel::all();

        // return $filmes;

        return view('usuario/filmes', compact('filmes'));
    }


    public function indexHome()
    {

        /*   $apikey = env('TMDB_API_KEY');


        //é necessario configura para produção o ssl
        $response = Http::withoutVerifying()->get("https://api.themoviedb.org/3/movie/now_playing", [
            'api_key' => $apikey,
            'language' => 'pt-BR',
            'region' => 'BR'
        ]);

         $filmes = $response->json()['results']; */

        $filmes = filmeModel::all();

        // return $filmes;

        return view('welcome', compact('filmes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filme = new filmeModel();
        $filme->titulo = $request->titulo;
        $filme->genero = $request->genero;
        $filme->lancamento = $request->lanca;
        $filme->classificacao = $request->classificacao;
        $filme->sinopse = $request->sinopse;
        $filme->created_at = date('Y-m-d');
        $filme->updated_at = date('Y-m-d');
        $filme->save();
        return view('/admin.adm');
    }

    public function addFilneApi()
    {
        $apikey = env('TMDB_API_KEY');

        //é necessario configura para produção o ssl
        $response = Http::withoutVerifying()->get("https://api.themoviedb.org/3/movie/now_playing", [
            'api_key' => $apikey,
            'language' => 'pt-BR',
            'region' => 'BR'
        ]);

        $responseGenero = Http::withoutVerifying()->get("https://api.themoviedb.org/3/genre/movie/list", [
            'api_key' => $apikey,
            'language' => 'pt-BR'
        ]);




        $filmes = $response->json()['results'];


        $generos = $responseGenero->json()['genres'];

        foreach ($generos as $genero) {

            generoModel::updateOrCreate(
                ['idGenero' => $genero['id']],
                ['nomeGenero' => $genero['name']]
            );
        }


        foreach ($filmes as $filme) {

            if (!empty($filme['poster_path'])) {

                $urlImagem = 'https://image.tmdb.org/t/p/w300' . $filme['poster_path'];
                $conteudoImagem = http::withoutVerifying()->get($urlImagem)->body();

                $nomeArquivo = basename($filme['poster_path']);

                $caminhoSalva = 'uploads/' . $nomeArquivo;

                Storage::disk('public')->put($caminhoSalva, $conteudoImagem);
            } else {
                $caminhoSalva = null;
            }


            filmeModel::updateOrCreate(
                ['idFilme' => $filme['id']],
                [
                    'titulo' => $filme['title'],
                    'genero' => $genero['name'],
                    'lancamento' => $filme['release_date'],
                    'classificacao' => $filme['adult'],
                    'poster' => $caminhoSalva,
                    'sinopse' => $filme['overview']
                ]
            );
        }


        return 'salvo';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
