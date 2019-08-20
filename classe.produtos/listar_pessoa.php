<?php

    include("cabecalho.php");
    include("ClassePessoa.php");
    session_start();

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