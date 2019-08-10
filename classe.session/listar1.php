<?php

    include("ClassePessoa.php");
    session_start();
    echo"<p><a href=\"exercicio1.php\"> Cadastros de Usuarios</a> | 
        <a href=\"listar1.php\"> lista de Tabelas</a>
        <p> ";
    
?>
             <div classi="center">
            <table class="tabela1" width="40%" border="2">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>cpf</th>
                    <th>Sexo</th>
                    <th>Nasc</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($_SESSION["pessoa"] as $i=>$p)
                {
                    $p->exibeTR();

                }
                ?>
            
            </tbody>
            </table>
            </div>