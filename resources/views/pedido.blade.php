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
      <th>User</th>
      <th>Produto</th>
      <th>Quantidade</th>
      <Th>data</Th>
    </tr>
    @foreach ($pedido as $pedidos)
    <ul>
  <li>{{$pedido->user->name}}</li>
  <li>{{$pedido->items->name}}</li>
  <hr>
</ul>
             
    @endforeach
  </table>       


</body>
</html>