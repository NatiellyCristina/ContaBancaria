<?php

include("cabecalho.php");
include("ClassePessoa.php");


//$n = $_POST["nome"];
//$e= $_POST["email"];
//$c = $_POST["cpf"];
//$s = $_POST['sexo'];
//$d = $_POST['nasc'];

$p = new pessoa($_POST);

session_start();

$_SESSION['pessoa'][] = $p;

echo"Pessoa cadastrada com sucesso";
$p->exibe();
 
?>
