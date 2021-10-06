<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center">
    <header class="bg-secondary text-light text-center mb-5 p-2">
        <navbar>
            USUARI: {{Cookie::get('nomUsuari')}}
        </navbar>
    </header>
    <h2 class="pt-3 pb-4">Registrar nou empleat</h2>
    <form method="post" action="{{route('registreOk')}}" style="display:inline">
        @csrf
        <input class="text-center m-1" name="name" placeholder="entreu el nom">
        @error('name')
            {{$message}}
        @enderror
        <br>
        <input class="text-center m-1" name="surname" placeholder="entreu el cognom">
        @error('surname')
            {{$message}}
        @enderror
        <br>
        <input class="text-center m-1" name="dni" placeholder="entreu el dni">
        @error('dni')
            {{$message}}
        @enderror
        <br>
        <button class="btn-outline-primary m-3 px-auto py-4" style="width:100px">Crear</button>
    </form>
    <form action="{{route('llistatInici')}}" style="display:inline">
        <button class="btn-outline-primary m-3 px-auto py-4" style="width:100px">Cancel·lar</button>
    </form>
</body>
</html>