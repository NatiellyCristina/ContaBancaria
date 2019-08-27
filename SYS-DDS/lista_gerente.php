<?php

    include("cabecalho.php");
    include("ClasseGerente.php");
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
                    <th>Area</th>
                    <th>Salario</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($_SESSION["gerente"] as $i=>$g)
                {
                
                    $g->exibePessoaTR();

                }
                ?>
            
            </tbody>
            </table>
            </div>