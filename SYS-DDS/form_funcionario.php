   <?php
                include("cabecalho.php");

    if(empty($_POST)){
    echo"<form action=\"cadastra_funcionario.php\" method=\"POST\">
    <fieldset>
        <legend>Cadastro de funcionários</legend>
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
            <input type=\"text\" step=\"0.01\" name=\"salario\" />
        </p>


        <p>
        <label>Turno:</label>
        <input type=\"text\" step=\"0.01\" name=\"turno\" />
        </p>

       
            
        <input type=\"submit\" value=\"Cadastrar\" />
         </fieldset>
         </form>
";
    }
    ?>

</body>
</html>