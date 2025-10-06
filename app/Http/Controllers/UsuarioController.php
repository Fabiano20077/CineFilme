<?php

namespace App\Http\Controllers;

use App\Models\filmeModel;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function fazerLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // 🔑 importante para manter o login ativo
            return redirect()->route('home');  // 🔁 redireciona para rota nomeada
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ])->onlyInput('email');
    }


    public function fazerLogout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();      // remove dados antigos
    $request->session()->regenerateToken(); // evita CSRF inválido
    return redirect('/login1');             // sua rota de login
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
        $user = new User();
        $user->name = $request->nome;
        $user->email = $request->email;
        $user->password = Hash::make($request->senha);
        $user->created_at = date('Y-m-d');
        $user->updated_at = date('Y-m-d');
        $user->save();

        // Auth::login($user);

        return view('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('usuario/perfil', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('usuario/perfilUpdate', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update(['name' => $request->nome]);
        $user->update(['email' => $request->email]);
        return redirect()->action('App\Http\Controllers\FilmeController@indexHome');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        /*   $user = User::find($id)->delete(); */
        Auth::logout();
        return redirect()->action('App\Http\Controllers\FilmeController@indexHome');
    }
}
