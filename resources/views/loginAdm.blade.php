<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login para adm</title>
    <link rel="stylesheet" href="{{url('assets/css/login.css')}}">
    <link rel="icon" href="{{url('assets/img/logoCinema.png')}}">
</head>

<body>

    <div class="containerLogin">

        <form class="login" action="/fazerLOginAdm" method="post">
            @csrf
            @error('emailInvalido')
            <h1 style="color: red; font-size:25px;">usuario nao existe ou email/senhas incorretos</h1>
            @else
            <h2>Login - Adm</h2>
            @enderror

            @error('emailAdm')
            <label style="color: red">{{$message}}</label>
            @else
            @enderror
            <input type="text" name="emailAdm" value="{{old('emailAdm')}}" placeholder="Email">
            @error('senhaAdm')
            <label style="color: red" for="">{{$message}}</label>
            @else
            @enderror
            <input type="password" name="senhaAdm" placeholder="Senha:">
            <p>não tenho conta? <a href="/cadaAdm" class="link">clique aqui</a></p>
            <div class="botoes">
                <button>ENTRAR</button>
            </div>
        </form>

    </div>

</body>

</html>