<?php

include("cabecalho.php");
include("ClasseGerente.php");



$g = new gerente($_POST);

session_start();

$_SESSION['gerente'][] = $g;

echo"Gerente  cadastrado(a) com sucesso";
$g->exibe();
 
?>
