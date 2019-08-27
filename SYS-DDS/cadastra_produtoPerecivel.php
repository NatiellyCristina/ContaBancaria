<?php


include("cabecalho.php");
include("ClasseProdutoPerecivel.php");


$p = new produtoPerecivel($_POST);

session_start();

$_SESSION['produtoPerecivel'][] = $p;

echo"Produto cadastrado com sucesso";
$p->exibicao_unitaria();
 
?>