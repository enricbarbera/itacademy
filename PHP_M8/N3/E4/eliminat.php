<html>
    <head>
        <title>Producte afegit</title>
        <link rel="stylesheet" href="estils.css">
    </head>
    <body>
        <div class="container">
        <?php
            require_once 'db_connection.php';
            $id = $_GET['id'];
            $connexio = new Connexio();
            $mysql = $connexio->connectar();
            $mysql->query("DELETE from compra WHERE id = $id;");
            echo '<h3>Producte eliminat.</h3>';
            $connexio->desconnectar($mysql);
        ?>
        
        <h3><a href="index.php">Tornar a la llista</a></h3>
        </div>
    </body>
</html>