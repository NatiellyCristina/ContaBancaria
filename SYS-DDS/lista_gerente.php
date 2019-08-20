<?php

    include("cabecalho.php");
    include("ClasseCliente.php");
    session_start();

?>
             <div classi="center">
            <table class="tabela1" width="40%" border="2">
            <thead>
                <tr>
                    <th>Area</th>
                    <th>Salario</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($_SESSION["gerente"] as $i=>$a)
                {
                
                    $a->exibePessoaTR();

                }
                ?>
            
            </tbody>
            </table>
            </div>