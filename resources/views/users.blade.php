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
  @if(count($users) == 0)
    <h3>Sem usuários</h3>      
  @else
  <h1>Usuários</h1>
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>CPF</th>
      <th>Email</th>
      <th>Ações</th>
    </tr>
    @foreach ($users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->cpf}}</td>
          <td>{{$user->email}}</td>
          <td>
            <form method="POST" action="/deletar_usuario/{{$user->id}}">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete user" class="button">
            </form>

            <a href="/editar_usuario/{{$user->id}}" class="aButton">Editar</a>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif

</body>
</html>