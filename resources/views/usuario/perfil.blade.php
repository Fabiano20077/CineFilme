@extends('templates.template')
@section('head')

<link rel="stylesheet" href="{{url('assets/css/perfil.css')}}">

@endsection
@section('conteudo')


<div class="container">
    <h3> nome: {{$user->name}}</h3>
    <h3> email: {{$user->email}}</h3>
        <a class="edita" href="/perfil-edit/{{ Auth::user()->idUsers}}">edita</a>
        <a class="sai" href="/perfil-delete/{{ Auth::user()->idUsers}}">sair</a>
</div>



@endsection