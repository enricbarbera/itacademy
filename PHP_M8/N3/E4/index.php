<html>
    <head>
        <title>Llista compra</title>
        <link rel="stylesheet" href="estils.css">
    </head>
    <body>
        <div class="container">
<!--        <form method="post" action="insereix.php">
            <input type="submit" value="Afegir Nou Producte" class="boto">
        </form>-->
        <?php
//    class connexio{
//        $mysql = new mysqli('localhost','root','Delbar1748!','m8_llistacompra',3307);
//        if ($mysql->connect_error) {
//            die("Fallo al conectar a MySQL");
//        }
        //    else{
        //        echo "ok";
        //    }
//        function connectar(){
//            $mysql = mysqli_connect('localhost','root','Delbar1748!','m8_llistacompra',3307);
//        }
//    }
//        $mysql = new connexio;
//        $mysql->connectar();
        $mysql = mysqli_connect('localhost', 'root', 'Delbar1748!', 'm8_llistacompra', 3307);
        
        //**************ESBORRO TOTS ELS ELEMENTS DE LA TAULA PQ NO  ES REPETEIXIN A CADA REFRESCAT DE LA PÀGINA**********

//        $mysql->query("DELETE FROM compra");

        //********************INSERCIÓ DE 3 PRODUCTES - EXERCICI 1 NIVELL 1 ****************
//        $mysql->query("INSERT INTO compra (nom, quantitat, preu) VALUES ('cafè', 2, 3.50)") or die($mysql->error);
//        $mysql->query("INSERT INTO compra (nom, quantitat, preu) VALUES ('pèsols', 3, 0.75)") or die($mysql->error);
//        $mysql->query("INSERT INTO compra (nom, quantitat, preu) VALUES ('pa', 1, 1.25)") or die($mysql->error);

        //*********************ASSIGNACIÓ A VARIABLES DELS RESULTATS DELS QUERIES***********
        $resultat = $mysql->query("SELECT *, round(preu*quantitat,2) AS total FROM compra");
        $total = $mysql->query("SELECT round(SUM(preu*quantitat),2) FROM compra");
        

        //*****************DEFINICIÓ CLASSE "Taula" PER IMPRIMIR ELS RESULTATS DELS QUERIES***************
        class Taula {

//            public $resultat = $mysql->query("select *, preu*quantitat AS total from compra");
//            public $t;
            function imprimirTaula($resultat, $total, $casa = 'BARBAS') {
                $row = mysqli_fetch_row($total);
                echo '<h3>LLISTA COMPRA CASA ' . $casa . '</h3>';
                //***********FORMULARI AMB BOTÓ D'ACCÉS A PÀGINA D'INSERCIÓ PRODUCTE - EXERCICI2, NIVELL 2*******
                echo '<form method="post" action="insereix.php">
                    <input type="submit" value="(Afegir Nou Producte)" class="boto">
                </form>';
                echo '<table>';
                echo '<tr><th>ID</th><th>NOM</th><th>QUANTITAT</th><th>PREU</th><th>TOTAL</th>';
                echo '<th></th><th></th>';
                echo '</tr>';
                while ($r = $resultat->fetch_array()) {
                    if ($r['id'] % 2 == 0) {
                        echo '<tr><td>';
                    } else {
                        echo '<tr class="fosc"><td>';
                    }
                    echo $r['id'];
                    echo '</td>';
                    echo '<td>';
                    echo $r['nom'];
                    echo '</td>';
                    echo '<td>';
                    echo $r['quantitat'];
                    echo '</td>';
                    echo '<td>';
                    echo $r['preu'];
                    echo '</td>';
                    echo '<td>';
                    echo $r['total'];
                    echo '</td>';
                    //************NOVES COLUMNES PER AFEGIR BOTONS "Modificar" i "Eliminar" - EXERCICI 3 - NIVELL 2*********
                    echo '<td>';
                    echo '<div class="modificar"><a href="modificar.php?id='.$r['id'].';">modificar</a></div>';
                    echo '</td>';
                    echo '<td>';
                    echo '<div class="eliminar"><a href="eliminar.php?id='.$r['id'].';">eliminar</a></div>';
                    echo '</td>';
                    echo '</tr>';
                }
                echo '<tr><th></th><th></th><th></th><th class="total">TOTAL:</th><th class="total">' . $row[0] . '</th>';
                echo '<th></th><th></th>';
                echo '</tr>';
                echo '</table>';
            }

        }

        //************INSTANCIACIÓ OBJECTE DE LA CLASSE TAULA***********************
        $taula1 = new Taula;
        $taula1->imprimirTaula($resultat, $total, 'CRISPÍ');
//            imprimirTaula($resultat);
//        $mysql->query("DELETE FROM compra");
        
        //*************TANCAMENT DE LA CONNEXIÓ AMB LA BASE DE DADES******************
        $mysql->close();
        ?>
        
        </div>
    </body>
</html>



