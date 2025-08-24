<?php

namespace App\Http\Controllers;

use App\Models\filmeModel;
use Illuminate\Http\Request;
use App\Models\generoModel;

class generoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos = generoModel::all();
        $filme = filmeModel::all();
        return view('/admin.adicionarfilme', compact('generos','filme'));
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
