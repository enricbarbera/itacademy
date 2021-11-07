<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT {{$team->name}} TEAM</title>
</head>
<body>
    <form method="post" action="{{route('teams.update', $team)}}">
        @csrf
        @method('put')
        <input name="name" value="{{$team->name}}">
        <input name="city" value="{{$team->city}}">
        <input name="stadium" value="{{$team->stadium}}">
        <input name="color" value="{{$team->color}}">
        <button>Modificar</a>
    </form>
</body>
</html>