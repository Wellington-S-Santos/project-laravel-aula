<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>

  <table border="1">
    <tr>
      <th>ID</th>
      <th>Produto</th>
      <th>Quantidade</th>
      <Th>data</Th>
    </tr>
    @foreach ($pedidos as $pedido)
    <ul>
  <ul>
  @foreach ($pedido->items as $item)
  <b>Nome - Preço - Qtde</b>
  <li>{{ $item->name }} {{$}}</li>
  
  @endforeach
  </ul>
  
  </li>
  <li>{{$pedido->user}}</li>
  <hr>
</ul>
             
    @endforeach
  </table>       


</body>
</html>