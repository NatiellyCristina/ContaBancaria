<?php

    include("ClasseProduto.php");
    session_start();
   
?>
             <div classi="center">
            <table class="tabela1" width="40%" border="2">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>Tipo</th>
                    <th>Unidade</th>
                    <th>Preço</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($_SESSION["produto"] as $i=>$p)
                {
                    $p->exibicao_tabela()();

                }
                ?>
            
            </tbody>
            </table>
            </div>