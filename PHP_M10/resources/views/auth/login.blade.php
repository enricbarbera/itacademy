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
    <h3 class="text-center mt-5 text-dark">Login usuari</h3>
    <form method="post" action="/login" class="text-center">
        <input name="name" placeholder="entra el nom" class="shadow rounded border text-muted text-center my-2">
        <input name="pwd" placeholder="entra el password" class="shadow rounded border text-muted text-center my-2">
        <br>
        <button class="btn mt-4 bg-info text-black rounded border border-5 border-dark font-weight-lighter">Entrar</button>
    </form>
    <div class="text-center">
        <a href="recover" class="text-center text-decoration-none">He oblidat el password</a>
        <br>
        <a href="newUser" class="text-center text-decoration-none">Crear nou usuari</a>
    </div>
</body>
</html>