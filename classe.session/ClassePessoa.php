<?php

class pessoa{

public $nome;
public $email;
public $cpf;
public $sexo;
public $nasc;


        function __construct($n, $e, $c, $s, $d)
        {
            $this->nome = $n;
            $this->email = $e;
            $this->cpf = $c;
            $this->sexo = $s;
            $this->nasc = $d;
        }
        function exibe()
        {
            echo"<fieldset>
                <div>
                <label>Nome:</label>".$this->nome."  
                </div>          

                <div>
                <label>Email:</label>".$this->email."  
                </div>  

                <div>
                <label>CPF:</label>".$this->cpf."  
                </div>  

                <div>
                <label>Sexo:</label>".$this->sexo."  
                </div>  

                <div>
                <label>Nasc:</label>".$this->nasc."  
                </div>  
            </fieldset>
            ";
        }
        function exibeTR()
        {
            
            echo "
              <tr>
                <td>".$this->nome."</td>
                <td>".$this->email."</td>
                <td>".$this->cpf."</td>
                <td>".$this->sexo."</td>
                <td>".$this->nasc."</td>
                </tr>";
        }
    

      
}
?>