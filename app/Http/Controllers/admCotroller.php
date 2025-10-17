<?php

namespace App\Http\Controllers;

use App\Models\admModel as adm;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\FunctionContextPass;

class admCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $adm = new adm();

        $adm->nomeAdm = $request->nomeAdm;
        $adm->emailAdm = $request->emailAdm;
        $adm->senhaAdm = Hash::make($request->senhaAdm);

        $adm->save();

        return 'salvo';
    }

    public function loginAdm(Request $request)
    {

        $data = $request->validate(
            [
                'emailAdm' => 'required|email',
                'senhaAdm' => 'required|min:6'
            ],
            [
                'emailAdm.required' => 'digite seu email',
                'emailAdm.email' => 'email Invalido',
                'senhaAdm.required' => 'digite sua senha',
                'senhaAdm.min' => 'digite pelo menos 6 caracteres'
            ]
        );
        
        $credecias = [
            'emailAdm' => $data['emailAdm'],
            'password' => $data['senhaAdm']
        ];

        if (Auth::guard('admin')->attempt($credecias)) {
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors(
                ['emailInvalido' => 'senha ou email errados']
            )->onlyInput('emailAdm');
        }
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
