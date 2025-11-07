<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="{{url('assets/css/cadastroUsuario.css')}}">
    <link rel="icon" href="{{url('assets/img/logoCinema.png')}}">
</head>

<body>
    <div class="containerLogin">

        <form class="login" action="/cadastro" method="post">
            @csrf
            <h2>Cadastro - Usuario</h2>
            <input type="text" name="nome" value="{{old('nome')}}" placeholder="Nome:" required>

            @error('email')
            <label for="" style="color: red;">{{$message}}</label>
            @else
            @enderror
            <input type="email" name="email" value="{{old('email')}}" placeholder="Email:" required>
            <input id="senha" type="password" name="senha" value="{{old('senha')}}" placeholder="Senha:" required>
            <input id="senha2" type="password" name="" placeholder="Confirmar senha" required>
            <div class="botoes">
                <button type="button" class="botao"> cadastrar </button>
            </div>
        </form>

    </div>

    <script src="{{url('assets/js/script.js')}}"></script>
</body>

</html>