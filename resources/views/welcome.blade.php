@extends('templates.template')
@section('head')
<link rel="stylesheet" href="{{url('assets/css/home.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

@section('conteudo')

@php

$user = Auth::user();

@endphp

@if(Auth::check())
    Logado como: {{ Auth::user()->name }}
@else
    Não logado
@endif
<div class="containerCarrousel">

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
            
            <div class="carousel-item active">
                <img src="{{url('/assets/img/carrosel_quarteto.png')}}" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="{{url('/assets/img/carrosel_smurfs.png')}}" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="{{url('/assets/img/carrosel_jurassic.png')}}" class="d-block w-100" alt="...">
            </div>

             <div class="carousel-item">
                <img src="{{url('/assets/img/carrosel_amores.png')}}" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="{{url('/assets/img/carrosel_sexta.png')}}" class="d-block w-100" alt="...">
            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
<div class="filmes">
    <div class="titulo">
        <h1 class="h12">CONHEÇA OS FILMES QUE ESTÃO EM CARTAZ NO NOSSO CINEMA!</h1>
    </div>
    <div class="subtitulo">
        <p></p>
    </div>
    <div class="cataz">

        @foreach($filmes->take(5) as $filme)

        <div class="filme-card">
            <div class="card55">

                <div class="imagem">
                    <img class="img2" src="{{asset('storage/'.$filme->poster) }}">
                </div>
                <div class="conteudo">
                    <div>
                        <h2>{{$filme->titulo}}</h2>
                    </div>
                    <div class="if">

                        <label for="">genero: {{$filme->genero}} </label>
                        <label for="">classificação: {{$filme->sinopse}}</label>
                        <label for="">data de lançamento: {{$filme->lancamento}}</label>
                    </div>
                </div>

            </div>
        </div>

        @endforeach
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
@endsection