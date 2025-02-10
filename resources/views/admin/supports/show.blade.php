<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes</title>
</head>
<body>
    <li>Assunto :{{$support->subject}}</li>
    <li>Descrição :{{$support->body}}</li>
    <li>Estado :{{$support->status}}</li>

    <form action="{{ route('support.destroy', $support->id)}}" method="POST">
        @csrf()
        @method('DELETE')
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>