<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/stelyL.css">
  <title>Document</title>
</head>
<body>
  @if(count($produtos) == 0)
    <h3>Sem produtos</h3>      
  @else
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Preço</th>
      <th>Ações</th>
    </tr>
    @foreach ($produtos as $produto)
        <tr>
          <td>{{$produto->name}}</td>
          <td>{{$produto->descricao}}</td>
          <td>{{$produto->preco}}</td>
          <td>
            <form method="POST" action="/deletar_produto/{{$produto->id}}">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete produto" class="button">
            </form>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif

</body>
</html>