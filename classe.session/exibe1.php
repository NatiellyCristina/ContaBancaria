<?php


echo"<p><a href=\"exercicio1.php\"> Cadastros de Usuarios</a> | 
<a href=\"listar1.php\"> lista de Tabelas</a>

<p> ";
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
