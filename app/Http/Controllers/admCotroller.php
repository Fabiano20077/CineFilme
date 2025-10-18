<?php

namespace App\Http\Controllers;

use App\Models\admModel as adm;
use App\Models\filmeModel as filme;
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

        return view('admin.editarFilme', compact('filme'));
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
    
}
