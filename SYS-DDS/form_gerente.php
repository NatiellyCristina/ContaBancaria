<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title> Cadastro de Gerentes!</title>
    </head>
    <body>
        <?php
                include("cabecalho.php");;

    if(empty($_POST)){
    echo"<form action=\"cadastra_gerente.php\" method=\"POST\">
    <fieldset>
        <legend>Cadastro de Gerentes</legend>
        <p>
        
        ";
            include("form_pessoas.php");
     echo
     "
            <label>Área:</label>
            <input type=\"text\" name=\"area\" size=\"30\" />
        </p>
        <p>
            <label>Salario</label>
            <input type=\"number\" step=\"0.01\" name=\"salario\" />
        </p>
    
        <input type=\"submit\" value=\"Cadastrar\"/>
         </fieldset>
         </form>
";
    }

    ?>