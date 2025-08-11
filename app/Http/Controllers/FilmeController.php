<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $apikey = env('TMDB_API_KEY');


//é necessario configura para produção o ssl
        $response = Http::withoutVerifying()->get("https://api.themoviedb.org/3/movie/now_playing", [
            'api_key' => $apikey,
            'language' => 'pt-BR',
            'region' => 'BR'
        ]);

     

        $filmes = $response->json()['results'];

        return view('filmes', compact('filmes'));
    }


     public function indexHome()
    {

        $apikey = env('TMDB_API_KEY');


//é necessario configura para produção o ssl
        $response = Http::withoutVerifying()->get("https://api.themoviedb.org/3/movie/now_playing", [
            'api_key' => $apikey,
            'language' => 'pt-BR',
            'region' => 'BR'
        ]);

     

        $filmes = $response->json()['results'];

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
        //
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
