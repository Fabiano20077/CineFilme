@extends('templates.template')
@section('head')

<link rel="stylesheet" href="{{url('assets/css/perfil.css')}}">

@endsection
@section('conteudo')


<div class="container">
    <h1> nome: {{$user->name}}</h1>
    <h3> email: {{$user->email}}</h3>
        <a href="/perfil-edit/{{$user->id}}">edita</a>
        <a href="/perfil-delete{{$user->id}}">sair</a>
</div>



@endsection