<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/stelyL.css">
    <title>Pedidos</title>
</head>
<body>
<h1>Pedidos</h1>
<table border="1">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Produto</th>
      <th>Preço</th>
      <th>Quantidade</th>
      <th>Data</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pedidos as $pedido)
      
      @foreach ($pedido->items as $item) 
        <tr>
          <td>{{ $pedido->user->name }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item-> preco }}</td> 
          <td>{{ $item-> pivot -> quantidade }}</td>
          <td>{{ $pedido->created_at}}</td> 
          <td>{{ $item-> pivot -> quantidade * $item-> preco }}</td>
        </tr>
      @endforeach
    @endforeach
  </tbody>
</table>    


</body>
</html>