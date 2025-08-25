@extends('templates.admTemplate')
@section('headC')

@endsection
@section('conteudoC')

<form action="/sala-insert" method="post">
@csrf
    <input type="date" name="date" value="">
    <input type="time" name="hora" value="">
    <select name="select" id="">
        @foreach($filmes as $filme)
        <option value="{{$filme->idFilme}}">{{$filme->titulo}}</option>
        @endforeach
    </select>

    <button> aqui</button>

</form>


@endsection