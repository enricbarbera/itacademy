<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="bg-light text-secondary text-right m-2">
    <h3 class="text-center mt-5 text-dark">Modificar el llibre amb id: <?php echo $id ?></h3>
    <form method="post" action="/catalog/edit" class="text-center">
        <!-- @csrf -->
        <input name="titol" placeholder="Introduïr títol" value="{{old('titol')}}" class="shadow rounded border text-muted text-center my-2">@error('titol'){{$message}}@enderror
        <input name="autor" placeholder="Introduïr autor" value="{{old('autor')}}" class="shadow rounded border text-muted text-center my-2">@error('autor'){{$message}}@enderror
        <input name="any" placeholder="Introduïr any edició" value="{{old('any')}}" class="shadow rounded border text-muted text-center my-2">@error('any'){{$message}}@enderror
        <br>
        <button class="btn mt-4 bg-info text-black rounded border border-5 border-dark font-weight-lighter">Enviar</button>
    </form>
</body>
</html>