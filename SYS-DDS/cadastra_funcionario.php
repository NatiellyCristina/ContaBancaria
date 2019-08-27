<?php

include("cabecalho.php");
include("ClasseFuncionario.php");



$f = new funcionario($_POST);

session_start();
$_SESSION['funcionario'][] = $f;

echo"Funcionario(a) cadastrada com sucesso";
$f->exibe();
 
?>
