@extends('templates.admTemplate')
@section('headC')
<link rel="stylesheet" href="{{ asset('assets/css/addFilme.css') }}">
@endsection
@section('conteudoC')

<div class="container">
    <div class="busca">
        <input class="buscarInput" type="text" placeholder="Buscar Filme">
        <a class="novoFilme" href="{{route('addFilme')}}">novo fime</a>
    </div>
    <div class="filmes">
        @foreach($filme as $filme)
        <div class="card">
            <div class="conteudo3">
                <img src="{{ asset('storage/'.$filme->poster)}}" alt="{{$filme['titulo']}}">

                <h4>{{ $filme->titulo }}</h2>

                    <p>
                        <label for="">lançamento:</label> {{ $filme->lancamento }}
                    </p>
            </div>
            <div class="edita">
                <a class="editar" href="{{route('editarFilme', ['id'=> $filme->idFilme])}}">Editar</a>
                <a class="deleta" href="{{ route('deleteAdm', ['id'=> $filme->idFilme]) }}">Deleta</a>
            </div>


        </div>
        @endforeach
    </div>
</div>

@endsection