<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listagem dos usuarios !</h1>

    <a href="{{ route('usuario.create') }}" target="_blank">Cadastrar</a>
<table>
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Acções</th>
    </thead>
    <tbody>
        @foreach ($usuarios as  $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nome }}</td>
                <td>{{ $usuario->email }}</td>
                <td> <a href="{{ route('usuario.show', $usuario->id)}}">Ver Mais</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>