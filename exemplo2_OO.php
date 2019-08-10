<?php 

    include("exemplo_oo.php");

    $o1 = new NomeDaClasse();
    $o2 = new NomeDaClasse();

    $x = "texto qualquer";
    $y = array("a", "b", "c");

    $z[0][0] = "a";
    $z[0][1] = "b";
    $z[1][0] = "c";
    $z[1][1] = "d";


    $o1 = new NomeDaClasse();

    $o2 = new NomeDaClasse();

    
    $o1->metodo1();
    $o1->metodo2("a", "b");
    $o1->metodoN("x", "y", "z");

    print_r($o1);
?>