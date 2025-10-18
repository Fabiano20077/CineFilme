<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineFilme</title>
    <link rel="stylesheet" href="{{url('assets/css/templeteAdm.css')}}">
    <link rel="icon" href="{{url('assets/img/logoCinema.png')}}">

    @yield('headC')
</head>

<body class="body2">
    <nav>
        <div class="logo">
            <h1 class="logo-nav">CineFilme</h1>
        </div>
        <ul>
            <li onclick="window.location.href='{{route('dashboard')}}'">dashboard</li>
            <li onclick="window.location.href='{{route('verFilme')}}'">ver filme</li>
            <li onclick="window.location.href='{{route('contatos')}}'">contatos</li>
            <li onclick="window.location.href='{{route('addSala')}}'">addSala</li>
        </ul>
          <div class="login">
            @if(!Auth::check())
            <a class="login-text" href="/login1">login</a>
            @else
            <div class="perfil">
                 <img class="perfil-tex" src="{{url('assets/img/barrasFundosBg.png')}}" alt="">
            </div>
            @endif
        </div>
    </nav>
        <div class="menu">
        <div class="icons">
            <img class="x" src="{{url('assets/img/x.png')}}" alt="">
        </div>
        <div class="opcoes">
            <div class="escolha">
                <a href="/perfil/{{ Auth::user()->idUsers }}">perfil</a>
            </div>
            <div class="escolha">
                <a href="{{route('logoutAdm')}}">sair</a>
            </div>
        </div>
    </div>

    @yield('conteudoC')

    <script src="{{url('assets/js/templete.js')}}"></script>
</body>

</html>