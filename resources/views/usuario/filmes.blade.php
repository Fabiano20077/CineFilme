@extends('templates.template')
@section('head')

    <link rel="stylesheet" href="{{url('assets/css/filme.css')}}">
    
@section('conteudo')



<div class="container-card">

    @foreach($filmes as $filme)



    <div class="card">

        <img src="{{ asset('storage/'.$filme->poster)}}" alt="{{$filme['titulo']}}">

        <h4>{{ $filme->titulo }}</h2>

        <p>
            <label for="">lançamento:</label> {{ $filme->lancamento }}
        </p>

        <button value="{{$filme->id}}"> ver </button>

    </div>


    @endforeach
</div>

@endsection