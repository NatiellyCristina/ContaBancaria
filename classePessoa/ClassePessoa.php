<?php

class pessoa{

public $nome;
public $email;
public $cpf;
public $sexo;
public $nasc;

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

        
      
}
?>