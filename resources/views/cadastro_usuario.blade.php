<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/stely.css">
    <title>Criar usuario</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <form action="/criar_usuario" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf">

        <label for="email">Email</label>
        <input type="text" name="email">

        <input type="submit" value="Salvar" class="cadastro">
    </form>
</body>
</html>

