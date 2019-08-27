<?php

include("cabecalho.php");
include("ClasseCliente.php");



$c = new cliente($_POST);

session_start();

$_SESSION['cliente'][] = $c;

echo"Cliente cadastrado(a) com sucesso";
$c->exibe_pessoa();
 
?>
