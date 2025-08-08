@extends('templates.template')
@section('head')
    <link rel="stylesheet" href="{{url('assets/css/filme.css')}}">
    
@section('conteudo')

<h1>pagina apis filmes </h1>

<div class="container-card">

    @foreach($filmes as $filme)



    <div class="card">

        <img src="https://image.tmdb.org/t/p/w300{{ $filme['poster_path']}}" alt="{{$filme['title']}}">

        <h2>{{ $filme['title'] }}</h2>

        <p>
            <label for="">lançamento:</label> {{ $filme['release_date'] }}
        </p>
    </div>


    @endforeach
</div>

@endsection