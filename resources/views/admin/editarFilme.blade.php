@extends('templates.admTemplate')
@section('headC')
<link rel="stylesheet" href="{{ asset('assets/css/addFilme.css') }}">
@endsection
@section('conteudoC')
<div class="container2">
    <div class="card2">
        <form action="{{route('updateFilme', ['id' => $filme->idFilme] )}}" method="post">
            @csrf
            <label for="">Titulo:</label>
            <input type="text" name="titulo" value="{{$filme->titulo}}">
            <label class="labelText" for="">genero filme:</label>
            <select class="input" name="genero" id="">
                <option value="{{$filme->genero}}">{{$filme->genero}}</option>
                @foreach($generos as $genero)
                @if($filme->genero !== $genero->nomeGenero)
                <option value="{{$genero->nomeGenero}}">{{$genero->nomeGenero}}</option>
                @else 

                @endif
                @endforeach
            </select>
            <label for="">lançamento:</label>
            <input type="date" name="lancamento" value="{{$filme->lancamento}}">
            <label for="">classificacao:</label>
            <select name="classificacao" id="">
                <option value="10">livre</option>
                <option value="12">12</option>
                <option value="14">14</option>
                <option value="16">16</option>
                <option value="18">18</option>
            </select>
            <label for="">sinopse:</label>
            <textarea value='' name="sinopse" id="">{{$filme->sinopse}}</textarea>
            <button> salva </button>
        </form>
    </div>
</div>

@endsection