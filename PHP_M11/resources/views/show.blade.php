<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center">
    <header class="bg-secondary text-light text-center mb-5 p-2">
        <navbar>
            USUARI: {{Cookie::get('nomUsuari')}}
        </navbar>
    </header>
    <h2 class="pt-3 pb-4">Visualitzar empleat</h2>
    <p>Empleat {{$id}}</p>
    <p>Nom : {{$employee->name}}</p>
    <p>Cognom : {{$employee->surname}}</p>
    <p>DNI : {{$employee->dni}}</p>
    <a href="{{route('llistatInici')}}">Tornar al llistat</a>
    <!-- INDICAR QUIN EMPLEAT ES VOL VISUALITZAR (ID?) -->
</body>
</html>