<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContatoModel;
use Illuminate\Contracts\View\View;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contatos = ContatoModel::all();
        return View('/admin/contatosViu', compact('contatos'));

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
        $contatos = new ContatoModel();
        $contatos->nome = $request->nome;
        $contatos->email = $request->email;
        $contatos->telefone = $request->telefone;
        $contatos->save();
        return View('/usuario/sobre');
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
