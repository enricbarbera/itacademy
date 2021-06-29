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
            echo '<h3>Llistat edicions jocs olímpics d\'estiu. (Període 1960/2016).</h3>';
            for($i=1960;$i<=2016;$i+=4){
                    echo '<p style="margin-left:25px">- ', $i, '</p>';
            }
        ?>
    </body>
</html>
