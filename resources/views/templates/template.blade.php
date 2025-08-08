<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineFilme</title>
    <link rel="stylesheet" href="{{url('assets/css/template.css')}}">
    @yield('head')
</head>
<body>
    <nav>
        <div class="logo">
                <h1 class="logo-nav">CineFilme</h1>
        </div>
        <ul>
            <li><a href="/">home</a></li>
            <li><a href="/filmes">filme</a></li>
            <li><a href="/sobre">sobre</a></li>
            <li><a href="#">alguma</a></li>
        </ul>
        <div class="login">
                <a class="login-text" href="#">login</a>
        </div>
    </nav>

    @yield('conteudo')

    <footer>
        todos os direitos reservados
    </footer>
</body>
</html>