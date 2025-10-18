<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineFilme</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/css/template.css')}}">
    <link rel="icon" href="{{url('assets/img/logoCinema.png')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @yield('head')
</head>

<body>
    <nav>
        <div class="logo">
            <img src="{{url('assets/img/nomeNav.png')}}" alt="CineFilme" class="nomeNav">
        </div>
        <ul>
            <li><a href="/">home</a></li>
            <li><a href="/filmes">filme</a></li>
            <li><a href="/sobre">sobre</a></li>

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
    @if(!Auth::check())

    @else
    <div class="menu">
        <div class="icons">
            <img class="x" src="{{url('assets/img/x.png')}}" alt="">
        </div>
        <div class="opcoes">
            <div class="escolha">
                <a href="/perfil/{{ Auth::user()->idUsers }}">perfil</a>
            </div>
            <div class="escolha">
                <a href="/sair">sair</a>
            </div>
        </div>
    </div>
    @endif

    @yield('conteudo')

    <footer>
        todos os direitos reservados
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init(); // Inicializa
    </script>

    <script src="{{url('assets/js/templete.js')}}"></script>
</body>

</html>