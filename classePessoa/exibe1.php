<?php
include("ClassePessoa.php");

$p1 = new pessoa();

$p1->nome = $_POST["nome"];
$p1->email = $_POST["email"];
$p1->cpf = $_POST["cpf"];
$p1->sexo = $_POST['sexo'];
$p1->nasc = $_POST['nasc'];

$p1->exibe();

 
?>
