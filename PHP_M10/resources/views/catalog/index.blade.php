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
    <header class="bg-secondary text-white text-bold shadow pt-2 pb-1">
        <p class="text-center">Nom Usuari: <?php echo $user ?></p>
    </header>
    <h3 class="text-center mt-5 text-dark">Llista llibres</h3>
    <div class="text-center">
        <a href="/catalog/create" class="text-center text-decoration-none">Insertar nou llibre</a>
    </div>
</body>
</html>