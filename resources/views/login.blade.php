<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{url('assets/css/login.css')}}">
    <link rel="icon" href="{{url('assets/img/logoCinema.png')}}">
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
    </nav>
    <div class="containerLogin">

        <form class="login" action="/fazerLogin" method="get">
            @csrf
            <h1>login</h1>

            <label for="">EMAIL:</label>
            <input type="text" name="email">
            <label for="">SENHA:</label>
            <input type="password" name="password">
            <p>não tenho conta? <a href="/cadastro" class="link">clique aqui</a></p>
            <button> ENTRAR</button>
        </form>

    </div>

</body>

</html>