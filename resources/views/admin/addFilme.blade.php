@extends('templates.admTemplate')
@section('headC')
<link rel="stylesheet" href="{{ asset('assets/css/addFilme.css') }}">
@endsection
@section('conteudoC')

<div class="container2">

    <div class="caixa">
        <form action="/addFilmes" method="post">
            @csrf
            <div class="formCard">
                <div class="esqueda">

                    <div>
                        <label class="labelText" for="">Titulo filme:</label>
                        <input class="inpute" type="text" name="titulo" placeholder="Digite...">
                    </div>
                    <div>
                        <label class="labelText" for="">Gênero filme:</label>
                        <select class="inpute" name="genero" id="">
                            <option value=""></option>
                            @foreach($generos as $genero)
                            <option value="{{$genero->nomeGenero}}">{{$genero->nomeGenero}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div>
                        <label for="">Lançamento:</label>
                        <input class="inpute" type="date" name="lanca" placeholder="Digite...">
                    </div>


                </div>


                <div class="direita">

                    <div>
                        <label for="">Sinópse:</label>
                        <textarea class="inpute" style="height: 30%; width: 70%;" name="sinopse" id="" placeholder="Digite..."></textarea>
                    </div>



                    <div>
                        <label for="">Classificação:</label>
                        <input class="inpute" type="number" name="classificacao" placeholder="Digite...">
                    </div>


                    <div>
                        <input type="file" name="imagem">
                    </div>


                </div>
            </div>
            <div class="botaoWrapper">
                <button class="botaoCadastra">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

@endsection