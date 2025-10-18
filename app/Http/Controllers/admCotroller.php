<?php

namespace App\Http\Controllers;

use App\Models\admModel as adm;
use App\Models\filmeModel as filme;
use App\Models\generoModel as genero;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\FunctionContextPass;

class admCotroller extends Controller
{
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

    public function editFilme(string $id)
    {
        $filme = filme::find($id);
        $generos = genero::all();
        return view('admin.editarFilme', compact('filme', 'generos'));
    }

    public function logoutAdm()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('loginAdm');
    }

    public function destroyAdm(string $id)
    {
        $filme = filme::find($id)->delete();

        return redirect()->route('verFilme');
    }

    public function updateFilme(string $id,Request $request)
    {
        $verifica = $request->validate(
            [
                'titulo' => 'required|string',
                'genero' => 'required|string',
                'lancamento' => 'required|date',
                'classificacao' => 'required|string',
                'sinopse' => 'required|string'
            ],
            [
                'titulo.required' => 'Digite um titulo',
                'titulo.string' => 'digite um titulo valido',
                'genero.required' => 'Selecione um genero',
                'genero.string' => 'selecione um genero valido',
                'lancamento.required' => 'Digite um lancamento',
                'lancamento.date' => 'digite um lancamento valido',
                'classificacao.required' => 'selecione uma classificacao',
                'classificacao.string' => 'Selecione uma classificacao valido',
                'sinopse.required' => 'Digite um sinopse',
                'sinopse.string' => 'digite um sinopse valido',
            ]
        );

        $credecias = [
            'titulo' => $verifica['titulo'],
            'genero' => $verifica['genero'],
            'lancamento' => $verifica['lancamento'],
            'classificacao' => $verifica['classificacao'],
            'sinopse' => $verifica['sinopse'],
        ];

        $filme = filme::find($id);

        $filme->update($credecias);

        return redirect()->route('verFilme');
    }

    public function buscarFilme(Request $request) 
    {
        $query = filme::query();

        if($request->search ) {
            $query->where('titulo', 'LIKE',  $request->search. '%');
        }

        $filme = $query->get();

        return view('admin.filmeTabela', compact('filme'));
    }
}
