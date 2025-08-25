@extends('templates.template')
@section('head')

<link rel="stylesheet" href="{{url('assets/css/ingessos.css')}}">

@endsection
@section('conteudo')

<div class="container">

    <div class="card">
        <div class="imagem">
            <img src="{{ asset('storage/'.$filmes->poster)}}">
        </div>
        <div class="if">
            <form class="fromSessoses" action="" method="">
            <h1>sessoes:</h1>
                <div class="sessoes">
                    
                    <select name="" id="">
                    <option value="">dias:</option>
                    <option value=""></option>
                  </select>
                  <select name="" id="">
                    <option value="">horarios:</option>
                    <option value=""></option>
                  </select>
                </div>
                <div class="botos">
                    <button>comprar</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection