@extends('templates.template')
@section('head')

<link rel="stylesheet" href="{{url('assets/css/perfil.css')}}">

@endsection
@section('conteudo')

<div class="container">
    <img class="image" src="#" alt="">
    <div class="card-perfil">
        <form action="/perfil-update/{{Auth::user()->idUsers}}" method="post" class="from-update">
            <div class="lados">
                <div class="texto">
                    <label for="">Nome:</label>
                    <input id="botao" type="text" class="input" name="email" value="{{$user->name}}" disabled>
                </div>

                <div class="texto">
                    <label for="">Email:</label>
                    <input id="botao" type="text" class="input" name="email" value="{{$user->email}}" disabled>
                </div>
            </div>
            <div class="lados">
                <div class="texto">
                    <label for="">senha passada:</label>
                    <input id="botao" type="text" class="input" name="email" value="" disabled>
                </div>
                <div class="texto">
                    <label for="">senha nova:</label>
                    <input id="botao" type="text" class="input" name="email" value="" disabled>
                </div>
            </div>
        </form>
        <button class="editar"> editar </button>
        <a class="sai" href="/perfil-delete/{{ Auth::user()->idUsers}}">sair</a>
    </div>
</div>


<script src="{{url('assets/js/perfil.js')}}"></script>
@endsection