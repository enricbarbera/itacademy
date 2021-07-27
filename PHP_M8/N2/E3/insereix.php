<html>
    <head>
        <title>Afegir producte</title>
<!--        <style>
            body {
                font-family: VERDANA;
                padding-top: 20px;
            }
            .container {
                display: flex;
                justify-content: center;
                /*flex-flow: column;*/
                /*align-content: center;*/
/*                margin: auto;
                text-align: center;*/
            }
            h3 {
                font-weight: lighter;
                background: whitesmoke;
                padding: 10px;
                color: gray;
            }
            form {
                background: lightblue;
                color: gray;
                font-size: 20px;
                padding: 0 20px 10px 20px;
                text-align: center;
                /*width: 30%;*/
            }
            input {
                background: whitesmoke;
                font-size: 20px;
                padding: 10px;
                border-style: none;
                border: 1px solid black;
            }
            .boto {
                background: white;
                /*color: white;*/
                padding: 5px 10px;
            }
        </style>-->
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

