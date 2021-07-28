<html>
    <head>
        <title>Modificar producte</title>
        <link rel="stylesheet" href="estils.css">
    </head>
    <body>
        <?php
            $id = $_GET['id'];
        ?>
        <div class="container">
            <form method="post" action="eliminat.php?id=<?php echo $id ?>">
                <h3>Eliminar producte</h3>
                <p>
                Segur que voleu eliminar el producte?
                </p>
                <input type="submit" value="Eliminar" class="boto">
            </form>
        </div>
    </body>
</html>

