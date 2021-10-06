<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center">
    <header class="bg-secondary text-light text-center mb-5 p-2">
        <navbar>
            USUARI: {{Cookie::get('nomUsuari')}}
        </navbar>
    </header>
    <h2 class="pt-3 pb-4">Eliminar empleat</h2>
    <h4>Esteu segur que voleu eliminar l'empleat {{$employee->name}}?</h4>
    <!-- <a href="{{route('eliminacioOk', $employee)}}">Confirmar</a> -->
    <!-- <a href="{{route('llistatInici')}}">Cancel·lar</a> -->
    <form action="{{route('eliminacioOk', $employee)}}" style="display:inline">
        <button class="btn-danger m-3 px-auto py-4" style="width:100px">Eliminar</button>
    </form>
    <form action="{{route('llistatInici')}}" style="display:inline">
        <button class="btn-outline-primary m-3 px-auto py-4" style="width:100px">Cancel·lar</button>
    </form>
    <!-- INDICAR QUIN EMPLEAT ES VOL ELIMINAR (ID?) -->
</body>
</html>