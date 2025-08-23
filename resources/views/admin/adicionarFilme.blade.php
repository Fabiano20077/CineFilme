@extends('templates.admTemplate')
@section('headC')

@endsection
@section('conteudoC')


<h1>filme add:</h1>
<form action="" method="post">
    <label for=""> titulo filme:</label>
    <input type="text" name="titulo">
    <label for="">genero filme:</label>
    <input type="text" name="genero">
    <label for="">lançamento:</label>
    <input type="text" name="lanca">
    <label for="">classificação:</label>
    <input type="text" name="classificacao">
    <label for="">sinopse:</label>
    <textarea name="" id=""></textarea>
    <input type="file">

</form>

@endsection