<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/xii" method="post">
        @csrf
        <label for="">nome</label>
        <input type="text" name="nomeAdm">
        <label for="">email</label>
        <input type="text" name="emailAdm">
        <label for="">senha</label>
        <input type="text" name="senhaAdm">
        <button>enviar</button>
    </form>
</body>
</html>