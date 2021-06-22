    <?php
        $sencer=5;
        $decimal=6.25;
        $cadenaTexte="Qualsevol cosa";
        $booleana=true;
        $segonaCadena="Qualsevol altra cosa";
        echo"Llistat variables definides i inicialitzades:\n";
        echo "Variable sencera: ",$sencer,"\nVaraible decimal: ",$decimal,"\nVariable de text: "
        ,$cadenaTexte,"\nVariable lògica: ",$booleana,"\n";
        define("ELMEUNOM", "Enric");
        echo "Constant predefinida: ",ELMEUNOM, "\n";
        echo "Mida de la primera variable textual: ",strlen($cadenaTexte),"\n";
        echo "Mida de la segona variable textual: ", strlen($segonaCadena),"\n";
        echo "Contingut primera variable textual invertit: ",strrev($cadenaTexte),"\n";
        echo "Contingut segona variable textual invertit: ",strrev($segonaCadena),"\n";
        echo "Concatenació de les 2 variables textuals: ",$cadenaTexte.$segonaCadena,"\n";
        $matriu1 = array(1, 2, 3, 4, 5);
        $matriu2 = array(6, 7, 8);
        array_push($matriu2, 9);
        echo"Elements primera matriu: \n";
        foreach ($matriu1 as $key => $value) {
            echo $matriu1[$key],". ";
        }
        echo"\n";
        echo"Elements segona matriu: \n";
        foreach ($matriu2 as $key => $value) {
            echo $matriu2[$key],". ";
        }
        echo"\n";
        $matriu3 = array_merge($matriu1,$matriu2);
        echo"Elements de la matriu resultant de la unió de les 2 anteriors: \n";
        foreach ($matriu3 as $key => $value) {
            echo $matriu3[$key],". ";
        }
        echo"\n";
        echo "Tamany de la matriu unió: ",count($matriu3);
        

