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
            $x=54;
            function parellSenar($num){
                if($num%2==0){
                    echo 'El número ' , $num , ' és parell.';
                }
                else{
                    echo 'El número ' , $num , ' és senar.';
                }
            }
            parellSenar($x);
        ?>
    </body>
</html>
