<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center">
    <header class="bg-secondary text-light text-center mb-5 p-2">
        <navbar>
            USUARI: {{Cookie::get('nomUsuari')}}
        </navbar>
    </header>
    <h2>Llistat d'empleats</h2>
    <h5><a class="text-black p-1 rounded-2" style="text-decoration:none" href="{{route('nouRegistre')}}">Crear nou registre</a></h5>
    <ul class="mt-4">
        @foreach ($employees as $employee)
            <li class="list-unstyled">
                <!-- {{route('visualitzarRegistre', $employee->id)}} -->
                <div class="row">
                    <p class="col text-right" style="display:inline; text-align:right">{{$employee->name}}</p>
                    <span class="col text-right" style="text-align:left">
                    <a class="text-black bg-white border border-2 border-primary p-1 m-1" style="text-decoration:none" href="{{route('visualitzarRegistre', $employee->id)}}">Veure</a>
                    <a class="text-black bg-white border border-2 border-warning p-1 m-1" style="text-decoration:none" href="{{route('editarRegistre', $employee)}}">Editar</a>
                    <a class="text-black bg-white border border-2 border-danger p-1 m-1" style="text-decoration:none" href="{{route('eliminarRegistre', $employee)}}">Eliminar</a>
                    </span>
                </div>
            </li>
        @endforeach
    </ul>

    
</body>
</html>