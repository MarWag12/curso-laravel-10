<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Adicionar novo suport</h1>

    <form action="{{ route('support.update', $support->id)}}" method="POST">
        {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
        @csrf()
        <input type="text" placeholder="assunto" name="subject" value="{{$support->subject}}">
        @method('put')
        <select name="" id="">
            <option value="a">a</option>
            <option value="p">pendente</option>
            <option value="c">concluído</option>
        </select>
        <textarea name="body" id="" cols="30" rows="10" placeholder="descrição">{{$support->body}}</textarea>
        <input type="submit" value="Actializar">
    </form>
</body>
</html>