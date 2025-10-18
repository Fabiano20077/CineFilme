@extends('templates.admTemplate')
@section('headC')
<link rel="stylesheet" href="{{ asset('assets/css/addFilme.css') }}">
@endsection
@section('conteudoC')

<div class="container2">

    <div class="caixa">
        <form class="formCard" action="/addFilmes" method="post">
            @csrf
            <div class="esqueda">
                <div class="parte1">
                    <div class="conteudo">
                        <label class="labelText" for=""> titulo filme:</label>
                        <input class="input" type="text" name="titulo">
                    </div>
                    <div class="conteudo">
                        <label class="labelText" for="">genero filme:</label>
                        <select class="input" name="genero" id="">
                            <option value=""></option>
                            @foreach($generos as $genero)
                            <option value="{{$genero->nomeGenero}}">{{$genero->nomeGenero}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="parte1">
                    <div class="conteudo">
                        <label for="">lançamento:</label>
                        <input class="input" type="date" name="lanca">
                    </div>
                    <div class="conteudo">
                        <label for="">classificação:</label>
                        <input class="input" type="number" name="classificacao">
                    </div>
                </div>
            </div>
            <div class="direita">
                <div class="parte2">
                    <div class="conteudo2">
                        <label for="">sinopse:</label>
                        <textarea name="sinopse" id=""></textarea>
                    </div>
                </div>
                <div class="parte2">
                    <div class="conteudo2">
                        <input type="file">
                    </div>
                </div>

                <button> cadastra</button>
            </div>

        </form>
    </div>
</div>

@endsection