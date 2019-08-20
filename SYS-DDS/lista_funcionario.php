<?php

    include("cabecalho.php");
    include("ClasseCliente.php");
    session_start();

?>
             <div classi="center">
            <table class="tabela1" width="40%" border="2">
            <thead>
                <tr>
        
                    <th>Área</th>
                    <th>Salário</th>
                    <th>Turno</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($_SESSION["funcionario"] as $i=>$a)
                {
                
                    $a->exibePessoaTR();

                }
                ?>
            
            </tbody>
            </table>
            </div>