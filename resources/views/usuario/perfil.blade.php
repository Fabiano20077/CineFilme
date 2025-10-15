@extends('templates.template')
@section('head')

<link rel="stylesheet" href="{{url('assets/css/perfil.css')}}">

@endsection
@section('conteudo')

<div class="container">
    <img class="image" src="{{url('assets/img/perfil.png')}}" alt="">
    <div class="card-perfil">
        <form action="/perfil-update/{{Auth::user()->idUsers}}" method="post" class="from-update">
            @csrf
            <div class="lados">
                <div class="texto">
                    <label for="">Nome:</label>
                    <input class="botao" type="text" class="input" name="nome" value="{{$user->name}}" disabled>
                </div>

                <div class="texto">
                    <label for="">Email:</label>
                    <input class="botao" type="text" class="input" name="email" value="{{$user->email}}" disabled>
                </div>
            </div>
            <div class="lados">
                <div class="texto">
                    <label for="">senha antiga:</label>
                    <input class="botao" type="text" class="input" name="senhaAntiga" value="" disabled>
                </div>
                <div class="texto">
                    <label for="">senha nova:</label>
                    <input class="botao" type="text" class="input" name="senhaNova" value="" disabled>
                </div>
            </div>
        </form>
        <div class="botoes">
            <div class="botoesLados">
                <button class="editar" value="1"> editar </button>
                
            </div>
            <div class="botoesLados add">

            </div>
        </div>
    </div>
</div>


<script src="{{url('assets/js/perfil.js')}}"></script>
@endsection