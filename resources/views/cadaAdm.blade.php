<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/css/cadastroAdm.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="containerLogin">

    <form action="/xii" method="post" class="login">
        @csrf
        <h2>Cadastro - Adm</h2>
        <input type="text" name="nomeAdm" placeholder="Nome:">
        <input type="text" name="emailAdm" placeholder="Email:">
        <input type="text" name="senhaAdm" placeholder="Senha:">
        <div class="botoes">
        <button class="botao">enviar</button>
    </form>
    </div>
</body>
</html>