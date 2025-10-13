<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="{{url('assets/css/login.css')}}">
    <link rel="icon" href="{{url('assets/img/logoCinema.png')}}">
</head>

<body>
    <div class="containerLogin">

        <form class="login" action="/cadastro" method="post">
            @csrf
            <h1>cadastro</h1>
            <label for="">nome:</label>
            <input type="text" name="nome" value="{{old('nome')}}" required>

            @error('email')
            <label for="" style="color: red;">{{$message}}</label>
            @else
            <label for="">Email:</label>
            @enderror
            <input type="email" name="email" value="{{old('email')}}"  required>
            <label for="">senha:</label>
            <input id="senha" type="password" name="senha" value="{{old('senha')}}"  required>
            <label for=""> confirma senha:</label>
            <input id="senha2" type="password" name="" required>
            <div class="botoes">
                <button type="button" class="botao"> cadastrar </button>
            </div>
        </form>

    </div>

    <script src="{{url('assets/js/script.js')}}"></script>
</body>

</html>