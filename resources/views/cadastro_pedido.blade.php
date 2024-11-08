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
<h1>Cadastrar Pedido</h1>
  <div class="pedido">
    <form action="/cadastrar_pedido" method="post">
      @csrf
      <label for="user">User:</label>
      <select name="user" id="user">
        @foreach($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>  
        @endforeach
      </select>
      <ul>
        @foreach($produtos as $produto)
          <li>
              <span>{{ $produto->name }} - ${{ $produto->preco }}</span>
              <input type="number" name="items[{{ $produto->id }}]" min="0" value="0">
          </li>
        @endforeach
    </ul>

      <button type="submit" class="cadastro">Cadastrar</button>
    </form>
  </div>
</body>
</html>

