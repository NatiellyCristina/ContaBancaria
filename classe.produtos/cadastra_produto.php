<?php


include("cabecalho.php");
include("ClasseProduto.php");


$p = new produto($_POST);

session_start();

$_SESSION['produto'][] = $p;

echo"Produto cadastrado com sucesso";
$p->exibicao_unitaria();
 
?>