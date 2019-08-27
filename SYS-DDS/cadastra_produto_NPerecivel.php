<?php


include("cabecalho.php");
include("ClasseProdutoNPerecivel.php");


$p = new produtoNPerecivel($_POST);

session_start();

$_SESSION['produtoNPerecivel'][] = $p;

echo"Produto cadastrado com sucesso";
$p->exibicao_unitaria();
 
?>