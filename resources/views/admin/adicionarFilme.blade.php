@extends('templates.admTemplate')
@section('headC')

@endsection
@section('conteudoC')


<h1>filme add:</h1>
<form action="/addFilmes" method="post">
    @csrf
    <label for=""> titulo filme:</label>
    <input type="text" name="titulo">
    <label for="">genero filme:</label>
    <select name="genero" id="">
        <option value=""></option>
        @foreach($generos as $genero)
        <option value="{{$genero->nomeGenero}}" >{{$genero->nomeGenero}}</option>
        @endforeach
    </select>
    <label for="">lançamento:</label>
    <input type="date" name="lanca">
    <label for="">classificação:</label>
    <input type="number" name="classificacao">
    <label for="">sinopse:</label>
    <textarea name="sinopse" id=""></textarea>
    <input type="file">

    <button> cadastra</button>

</form>


@foreach($filme as $fil)
<h1>{{$fil->titulo}}</h1>
@endforeach

@endsection