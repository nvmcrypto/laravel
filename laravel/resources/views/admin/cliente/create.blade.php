<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Criar novo cliente</h1>
    <form method="post" action="/admin/client/cadastrar">
        {!! csrf_field() !!}
        <label for="name">Nome</label>
        <input name="name" id="name" class="btn btn-primary" type="text" value="">
        <label for="email">Email</label>
        <input name="email" id="email" class="btn btn-primary" type="text" value="">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>