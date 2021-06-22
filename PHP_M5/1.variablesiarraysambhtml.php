<!DOCTYPE html>
<html lang="es">
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP-M5-part1</title>
    </head>
    <body>
    <?php
        $sencer=5;
        $decimal=6.25;
        $cadenaTexte="Qualsevol cosa";
        $booleana=false;
        $segonaCadena="Qualsevol altra cosa";
        echo "<h3><u>Variables definides i inicialitzades</u></h3>";
        echo "<p><b>Variable sencera: </b>".$sencer."</p>","<p><b>Variable decimal: </b>".$decimal.
        "</p>"."<p><b>Variable de text: </b>".$cadenaTexte."</p>","<p><b>Variable lógica: </b>".($booleana ? 'true' : 'false')."</p>";
        define("ELMEUNOM", "Enric");
        echo "<h3><u>Constant predefinida</u></h3><p>".ELMEUNOM."</p>";
        echo "<h3><u>Longituts de les variables textuals</u></h3>";
        echo "<p><b>Mida de la primera variable textual: </b>".strlen($cadenaTexte)."</p>";
        echo "<p><b>Mida de la segona variable textual: </b>".strlen($segonaCadena)."</p>";
        echo "<h3><u>Continguts invertits de les variables textuals</u></h3>";
        echo "<p><b>Contingut primera variable textual invertit: </b>".strrev($cadenaTexte)."</p>";
        echo "<p><b>Contingut segona variable textual invertit: </b>".strrev($segonaCadena)."</p>";
        echo "<h3><u>Concatenació de les 2 variables textuals: </u></h3><p>".$cadenaTexte.$segonaCadena."</p>";
        $matriu1 = array(1, 2, 3, 4, 5);
        $matriu2 = array(6, 7, 8);
        array_push($matriu2, 9);
        echo"<h3><u>Elements primera matriu</u></h3>";
        foreach ($matriu1 as $key => $value) {
            echo $matriu1[$key].". ";
        }
        echo"<h3><u>Elements segona matriu</u></h3>";
        foreach ($matriu2 as $key => $value) {
            echo $matriu2[$key].". ";
        }
        $matriu3 = array_merge($matriu1,$matriu2);
        echo"<h3><u>Elements de la matriu resultant de la unió de les 2 anteriors</u></h3>";
        foreach ($matriu3 as $key => $value) {
            echo $matriu3[$key].". ";
        }
        echo "<h3><u>Tamany de la matriu unió</u></h3><p>".count($matriu3)."</p>";
        
    ?>
    </body>
</html>

    
