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
            //Criba de Eratóstenes
            //Obtener las lista de números a evaluar
            $num=40;
            for($i=2;$i<$num;$i++)
            {
              $llista[$i]=true;
            }
//            var_export($numeros);
//            Hacer 2 el primer número primo
//            $numeros[2]=true;

            //Recorrer los números y para cada uno
            for ($j=2;$j<$num;$j++)
            {
              //Si es primo recorrer los múltiplos y marcarlos como no primo
              if ($llista[$j])
              {
                for ($i=$j*$j;$i<$num;$i+=$j)
                {
                   $llista[$i] = false;
                }
              }
            }

            //Muestro la lista de los primos 
            echo "Nombres primers entre 2 i ",$num,": ";
            for ($i = 2; $i < $num; $i++)
            {
              if ($llista[$i])
              {
                echo $i." ";
              }
            }
        ?>
    </body>
</html>
