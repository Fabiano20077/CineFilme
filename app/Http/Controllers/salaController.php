<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salaModel;
use App\Models\filmeModel;
use Faker\Core\File;

class salaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salas = salaModel::all();
        $filmes = filmeModel::all();
        return view('/admin.addSala', compact('salas','filmes'));
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
        $sala = new salaModel();
        $sala->dataSala = $request->date;
        $sala->horarioSala = $request->hora;
        $sala->idFilme = $request->select;
        $sala->save();
        echo 'deu bomm';
        //return redirect()->action('App\Http\Controllers\generoController@index');
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
