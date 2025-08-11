@extends('templates.ContatoTemplate')
@section('headC')

<link rel="stylesheet" href="{{url('assets/css/contato.css')}}">

@section('conteudoC')

<h1>lista contatos </h1>
<div class="containerIf">
    <div class="containerContatos">
    
    @foreach($contatos as $contato)
    <div class="contato">

        <h1> Nome: {{$contato->nome}}</h1>
        <h2> Email: {{$contato->email}}</h2>
        <h3> Telefone: {{$contato->telefone}}</h3>

    </div>
    
    @endforeach
</div>
</div>

@endsection