<?php
    echo"<form action=\"cadastra_cliente.php\" method=\"POST\">
    <fieldset>
        <legend>Cadastro de Cliente</legend>
        <p>
        <label>CPF:</label>
            <input type=\"text\" step=\"0.01\" name=\"cpf\" />
        </p>
        <p>
            <label>Nome:</label>
            <input type=\"text\" name=\"nome\" size=\"30\" />
        </p>
        <p>
            <label>Email</label>
            <input type=\"email\" step=\"0.01\" name=\"email\" />
        </p>
        <p>
            <label>Sexo:</label>
            <input type=\"radio\" name=\"sexo\"  value=\"Feminino\"  />Feminino 
            <input type=\"radio\" name=\"sexo\"  value=\"Masculino\"  />Masculino
        </p> 
        <p>
        <label>Data Nascimento:</label>
            <input type=\"date\" step=\"0.01\" name=\"dataNasc\" />
        </p>

        <p>
        <label>Endereco:</label>
            <input type=\"text\" step=\"0.01\" name=\"endereco\" />
        </p>
        <p>
        <label>Cidade:</label>
            <input type=\"text\" step=\"0.01\" name=\"cidade\" />
        </p>
        <p>
        <label>Estado:</label>
            <input type=\"text\" step=\"0.01\" name=\"estado\" />
        </p>
        <p>
        <label>País:</label>
            <input type=\"text\" step=\"0.01\" name=\"pais\" />
        </p>
            
        <input type=\"submit\" value=\"Cadastrar\"/>
    </fieldst>
         </form>
";
?>
