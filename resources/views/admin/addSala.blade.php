@extends('templates.admTemplate')
@section('headC')
<link rel="stylesheet" href="{{ asset('assets/css/addSala.css') }}">
@endsection
@section('conteudoC')
<div class="container">
    <div class="caixa">

        <form action="/sala-insert" method="post">
            @csrf
            <h1>Adicione uma sala!</h1>
            <input class="inputs" type="date" name="date" value="">
            <input class="inputs" type="time" name="hora" value="">
            <select class="inputs" name="select" id="">
                aaaaaaaaaaaa
                @foreach($filmes as $filme)
                <option value="{{$filme->idFilme}}">{{$filme->titulo}}</option>
                @endforeach
            </select>
            <div style="display: flex; align-items: center; justify-content: center;">
                <button> Enviar</button>
            </div>
        </form>
    </div>
</div>

@endsection