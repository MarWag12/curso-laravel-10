<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    @foreach ($errors->all() as $errors)
        {{$errors}}
    @endforeach
@endif
    <h1> Adicionar novo suport</h1>

    <form action="{{ route('support.store')}}" method="POST">
        {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
        @csrf()
        <input type="text" placeholder="assunto" name="subject" value="{{ old('subject') }}">
        <select name="" id="">
            <option value="a">a</option>
            <option value="p">pendente</option>
            <option value="c">concluído</option>
        </select>
        <textarea name="body" id="" cols="30" rows="10" placeholder="descrição">{{ old('body') }}</textarea>
        <input type="submit" value="enviar">
    </form>
</body>
</html>