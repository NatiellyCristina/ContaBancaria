<?php

    include("cabecalho.php");
    include("ClasseCliente.php");
    session_start();

?>
             <div classi="center">
            <table class="tabela1" width="40%" border="2">
            <thead>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>País</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($_SESSION["cliente"] as $i=>$c)
                {
                
                    $c->exibeTR();

                }
                ?>
            
            </tbody>
            </table>
            </div>