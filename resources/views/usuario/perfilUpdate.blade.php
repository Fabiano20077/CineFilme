@extends('templates.template')
@section('head')



@endsection
@section('conteudo')

<form action="/perfil-update/{{$user->id}}" method="post">

{{csrf_field()}}
    <label for="">novo nome:</label>
    <input type="text" name="nome" value="{{$user->name}}">
    <label for="">novo email:</label>
    <input type="text" name="email" value="{{$user->email}}">
    <button> mudar </button>
</form>

@endsection