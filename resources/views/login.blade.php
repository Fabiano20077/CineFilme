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

    <div class="containerLogin">

        <form class="login" action="/fazerLogin" method="post">
            @csrf
            @error('email')
            <h1 style="color: red;">usuario nao existe</h1>
            @else
            <h1>login</h1>
            @enderror

            <label for="">EMAIL:</label>
            <input type="text" name="email" value="{{old('email')}}" >
            <label for="">SENHA:</label>
            <input type="password" name="password">
            <div class="botoes">
                <p>não tenho conta? <a href="/cadastro" class="link">clique aqui</a></p>
                <button>ENTRAR</button>
            </div>
        </form>

    </div>

</body>

</html>