<html>
    <head>
        <title>Afegir producte</title>
        <link rel="stylesheet" href="estils.css">
    </head>
    <body>
        <div class="container">
            <form method="post" action="nou.php">
                <h3>Afegir nou producte</h3>
                <p>Nom del nou producte:
                <input type=text" name="nom" required>
                </p>
                <p>
                Quantitat:
                <input type="text" name="quantitat" size="2" required>
                </p>
                <p>
                Preu unitari:
                <input type="text" name="preu" size="4" required>
                </p>
                <input type="submit" value="Afegir" class="boto">
            </form>
        </div>
    </body>
</html>

