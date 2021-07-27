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
            <form method="post" action="editat.php?id=<?php echo $id ?>">
                <h3>Entrar canvis producte</h3>
                <p>
                Nou nom producte:
                <input type=text" name="nom">
                </p>
                <p>
                Nova quantitat:
                <input type="text" name="quantitat" size="2">
                </p>
                <p>
                Nou preu unitari:
                <input type="text" name="preu" size="4">
                </p>
                <input type="submit" value="Modificar" class="boto">
            </form>
        </div>
    </body>
</html>