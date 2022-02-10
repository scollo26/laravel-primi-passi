<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>descrizione</h1>
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('contatti')}}">Contatti</a></li>
        <li><a href="{{route('descrizione')}}">descrizione</a></li>
    </ul>
    @if(isset($descrizione))
    <p> {{ $descrizione }} </p>
    @endif
</body>
</html>