<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $xocos=5;
            $xiclets=8;
            $sweets=6;
            $preuXoco=1;
            $preuXiclet=.5;
            $preuSweet=1.5;
//            UNA SOLA FUNCIO PER CALCULAR EL PREU TOTAL
            function calculPreu($xocos, $xiclets, $sweets){
                global $preuXoco, $preuXiclet, $preuSweet;
                return($xocos*$preuXoco)+($xiclets*$preuXiclet)+($sweets*$preuSweet);
            }
//            TRES FUNCIONS, UNA PEL PREU TOTAL DE CADA PRODUCTE
            function preuXocos($xocos){
                global $preuXoco;
                return $preuXoco*$xocos;
            }
            function preuXiclets($xiclets){
                global $preuXiclet;
                return $preuXiclet*$xiclets;
            }
            function preuSweets($sweets){
                global $preuSweet;
                return $preuSweet*$sweets;
            }
//            IMPRESSIÓ A PARTIR DE LA FUNCIÓ ÚNICA
            echo '<h2>Càlcul preu total (amb una´sola funció)</h2> ',
                 $xocos, ' xocolates x ', $preuXoco, '€ = ', $xocos*$preuXoco, '€<br>',
                 $xiclets, ' xiclets x ', $preuXiclet, '€ = ', $xiclets*$preuXiclet, '€<br>',
                 $sweets, ' caramels x ', $preuSweet, '€ = ', $sweets*$preuSweet, '€<br>',
                 '<h3>Preu total comanda: ' , calculPreu($xocos, $xiclets, $sweets), '€</h3>';
            echo '<h2>Càlcul preu total (amb tres funcions separades)</h2> ',
                 $xocos, ' xocolates => ', preuXocos($xocos), '€<br>',
                 $xiclets, ' xiclets => ', preuXiclets($xiclets), '€<br>',
                 $sweets, ' cramels => ', preuSweets($sweets), '€<br>',
                 'TOTAL: ', preuXocos($xocos)+preuXiclets($xiclets)+preuSweets($sweets), '€';
        ?>
    </body>
</html>
