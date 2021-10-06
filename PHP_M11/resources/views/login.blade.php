<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center pt-5">
    <h2 class="pt-5 pb-4">Login usuari</h2>
    <form method="post" action="index">
        @csrf
        <input name="name" placeholder="entra el nom d'usuari" class="text-center">
        <input name="pwd" placeholder="entra el password" class="text-center">
        <br>
        <button class="btn-outline-primary m-3 px-auto py-4" style="width:100px">Entrar</button>
    </form>
</body>
</html>