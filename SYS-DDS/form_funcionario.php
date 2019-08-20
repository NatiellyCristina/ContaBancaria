<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title> Cadastro de funcionários!</title>
    </head>
    <body>
        <?php
                include("cabecalho.php");;

    if(empty($_POST)){
    echo"<form action=\"cadastra_funcionario.php\" method=\"POST\">
    <fieldset>
        <legend>Cadastro de funcionários</legend>
        <p>
            <label>Área:</label>
            <input type=\"text\" name=\"area\" size=\"30\" />
        </p>
        <p>
            <label>Salario</label>
            <input type=\"text\" step=\"0.01\" name=\"salario\" />
        </p>


        <p>
        <label>Turno:</label>
        <input type=\"text\" step=\"0.01\" name=\"turno\" />
        </p>

       
            
        <input type=\"submit\" value=\"Cadastrar\"/>
         </fieldst>
         </form>
";
    }