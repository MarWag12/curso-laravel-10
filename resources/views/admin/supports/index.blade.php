<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listagem dos Supportes !</h1>

    <a href="{{ route('support.create') }}" target="_blank">Novo +</a>
<table>
    <thead>
        <th>ID</th>
        <th>Assunto</th>
        <th>Estado</th>
        <th>Descrições</th>
        <th>Acções</th>
    </thead>
    <tbody>
        @foreach ($supports as  $support)
            <tr>
                <td>{{ $support->id }}</td>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td> <a href="{{ route('support.show', $support->id)}}">Detalhes</a></td>
                <td> <a href="{{ route('support.edit', $support->id)}}">Editar</a></td>
                <td> 
                    <form action="{{ route('support.destroy', $support->id)}}" method="POST">
                    @csrf()
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>