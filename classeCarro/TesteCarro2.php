<?php 

    include("ClasseCarro.php");

    $c1 = new Carro();

    $a = 12960;
    $t = 1.0/3600;
    $c1->VelocidadeAtual = 50;
    $c1->acelerar($a, $t);

    $c1->MostrarVelocidade();

?>