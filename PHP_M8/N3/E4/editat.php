<html>
    <head>
        <title>Producte afegit</title>
        <link rel="stylesheet" href="estils.css">
    </head>
    <body>
        <div class="container">
        <?php
            $id = $_GET['id'];
            echo $id;
            $mysql = mysqli_connect('localhost', 'root', 'Delbar1748!', 'm8_llistacompra', 3307);
            $mysql->query("UPDATE compra SET nom = '$_REQUEST[nom]', quantitat = '$_REQUEST[quantitat]', preu = '$_REQUEST[preu]' WHERE id = $id;");
            echo '<h3>Producte modificat.</h3>';
            $mysql->close();
        ?>
        
        <h3><a href="index.php">Tornar a la llista</a></h3>
        </div>
    </body>
</html>