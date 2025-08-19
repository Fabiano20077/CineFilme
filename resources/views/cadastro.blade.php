<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="{{url('assets/css/login.css')}}">
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
            <li><a href="#">alguma</a></li>
        </ul>
    </nav>
    <div class="containerLogin">

        <form class="login" action="/cadastro" method="post">
            @csrf
            <h1>cadastro</h1>
            <label for="">nome:</label>
            <input type="text" name="nome" required>
            <label for="">Email:</label>
            <input type="email" name="email" required>
            <label for="">senha:</label>
            <input type="password" name="senha" required>
            <label for=""> confirma senha:</label>
            <input type="password" name="" required>

            <button class="botao"> cadastrar </button>
        </form>

    </div>


</body>

</html>