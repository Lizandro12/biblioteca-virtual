<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(Auth::check())
    <h1>{{Auth::user()->name}}</h1>
    <form action="{{ route('user.logout')}}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    @else
    <h3>O usuario nao esta logado</h3>
    @endif
</body>
</html>
