<?php

class pessoa{

public $nome;
public $email;
public $cpf;
public $sexo;
public $nasc;


        function __construct($vetor)
        {
            $this->nome = $vetor["nome"];
            $this->email = $vetor["email"];;
            $this->cpf = $vetor["cpf"];;
            $this->sexo = $vetor["sexo"];;
            $this->nasc = $vetor["nasc"];;
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