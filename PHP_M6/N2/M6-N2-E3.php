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
            function compta2en2($fi=10){
                for($i=2;$i<=$fi;$i+=2){
                    print_r($i." ");
                }
            }
            compta2en2(25);
        ?>
    </body>
</html>
