<html>
    <head>
        <title>Producte afegit</title>
        <link rel="stylesheet" href="estils.css">
    </head>
    <body>
        <div class="container">
        <?php
            $mysql = mysqli_connect('localhost', 'root', 'Delbar1748!', 'm8_llistacompra', 3307);
            $mysql->query("INSERT INTO compra (nom, quantitat, preu) VALUES"
                    . "('$_REQUEST[nom]', '$_REQUEST[quantitat]', '$_REQUEST[preu]')");
            echo '<h3>Producte afegit a la llista.</h3>';
            $mysql->close();
        ?>
        
        <h3><a href="index.php">Tornar a la llista</a></h3>
        </div>
    </body>
</html>

        
