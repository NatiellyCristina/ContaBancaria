<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title> Cadastro de usuários!</title>
    </head>
    <body>
        <?php
                echo"<p><a href=\"index.php\"> Cadastros de Usuarios</a> | 
                    <p> ";

    if(empty($_POST)){
    echo"<form action=\"exibe1.php\" method=\"POST\">
    <fieldset>
        <legend>Cadastro de usuario</legend>
        <p>
            <label>Nome:</label>
            <input type=\"text\" name=\"nome\" size=\"30\" />
        </p>
        <p>
            <label>Email</label>
            <input type=\"email\" step=\"0.01\" name=\"email\" />
        </p>
        <p>
            <label>CPF:</label>
            <input type=\"text\" step=\"0.01\" name=\"cpf\" />
        </p>
        <p>
            <label>Sexo:</label>
            <input type=\"radio\" name=\"sexo\"  value=\"Feminino\"  />Feminino 
            <input type=\"radio\" name=\"sexo\"  value=\"Masculino\"  />Masculino
        </p> 
        <p>
        <label>Data Nascimento:</label>
        <input type=\"date\" step=\"0.01\" name=\"nasc\" />
        </p>
            
        <input type=\"submit\" value=\"Cadastrar\"/>
         </fieldst>
         </form>
";
    }