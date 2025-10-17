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
            <h1>login para o adm</h1>
            @enderror

            @error('emailAdm')
            <label style="color: red">{{$message}}</label>
            @else
            <label for="">EMAIL:</label>
            @enderror
            <input type="text" name="emailAdm" value="{{old('emailAdm')}}">
            @error('senhaAdm')
            <label style="color: red" for="">{{$message}}</label>
            @else
            <label for="">SENHA:</label>
            @enderror
            <input type="password" name="senhaAdm">
            <div class="botoes">
                <button>ENTRAR</button>
            </div>
        </form>

    </div>

</body>

</html>