<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title> Cadastro de produtos!</title>
    </head>
    <body>
        <?php
                include("cabecalho.php");;

    if(empty($_POST)){
    echo"<form action=\"cadastra_produto.php\" method=\"POST\">
    <fieldset>
        <legend>Cadastro de produtos</legend>
        <p>
            <label>Nome:</label>
            <input type=\"text\" name=\"nome\" size=\"30\" />
        </p>
        <p>
            <label>Descricao</label>
            <input type=\"text\" step=\"0.01\" name=\"desc\" />
        </p>

        <p>
            <label>Tipo:</label>
            <input type=\"radio\" name=\"tipo\"  value=\"perecivel\"  />Perecivel
            <input type=\"radio\" name=\"tipo\"  value=\"naoPerecivel\"  />Parecivel
        </p> 

        <p>
        <label>Unidade:</label>
        <input type=\"text\" step=\"0.01\" name=\"unidade\" />
        </p>

        <p>
        <label>Preço:</label>
        <input type=\"text\" step=\"0.01\" name=\"preco\" />
        </p>
            
        <input type=\"submit\" value=\"Cadastrar\"/>
         </fieldst>
         </form>
";
    }