<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center">
    <header class="bg-secondary text-light text-center mb-5 p-2">
        <navbar>
            USUARI: {{Cookie::get('nomUsuari')}}
        </navbar>
    </header>
    <h2 class="pt-3 pb-4">Editar empleat</h2>
    <p>Empleat {{$employee->name}}</p>
    <form method="post" action="{{route('edicioOk', $employee)}}" style="display:inline">
        @csrf
        @method('put')
        <input class="text-center m-1" name="name" value="{{$employee->name}}">
        <br>
        <input class="text-center m-1" name="surname" value="{{$employee->surname}}">
        <br>
        <input class="text-center m-1" name="dni" value="{{$employee->dni}}">
        <br>
        <button class="btn-warning m-3 px-auto py-4" style="width:100px">Editar</button>
    </form>
    <form action="{{route('llistatInici')}}" style="display:inline">
        <button class="btn-outline-primary m-3 px-auto py-4" style="width:100px">Cancel·lar</button>
    </form>
    <!-- INDICAR QUIN EMPLEAT ES VOL EDITAR (ID?) -->
</body>
</html>