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

    <form class="login" action="" method="get">
        <h1>cadastro</h1>
        <label for="">nome:</label>
        <input type="text" name="nome">
        <label for="">Email:</label>
        <input type="text" name="email">
        <label for="">telefone:</label>
        <input type="text" name="telefone">

        <button class="botao"> cadastrar </button>
    </form>

</div>


</body>
</html>