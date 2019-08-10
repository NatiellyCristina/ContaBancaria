<?php session_start(); ?>
<?php


echo"<p><a href=\"exercicio1.php\"> Cadastros de Usuarios</a> | 
<a href=\"listar1.php\"> lista de Tabelas</a>

<p> ";
include("ClassePessoa.php");


$n = $_POST["nome"];
$e= $_POST["email"];
$c = $_POST["cpf"];
$s = $_POST['sexo'];
$d = $_POST['nasc'];

$p = new pessoa($n, $e, $c, $s, $n);

$_SESSION['pessoa'][] = $p;

$p->exibe();
 
?>
