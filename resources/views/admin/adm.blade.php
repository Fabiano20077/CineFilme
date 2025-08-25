<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/css/adm-painel.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/filme.css')}}">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="painel">
            <div class="corpo"> 
                <h1>Bem-vindo ADM o que faremos hoje?</h1>
            </div>
            <ul>
                <li><a href="/addFilme">Filmes</a></li>
                <li><a href="/filmes">Usuarios</a></li>
                <li><a href="/config">Config</a></li>
                
            </ul>
        </div>
    </nav>



    <div class="cataz">

@foreach($filmes as $filme)

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

    
</body>

</html>