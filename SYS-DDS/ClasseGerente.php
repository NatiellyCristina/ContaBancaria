<?php

include("ClasseCliente.php");
class gerente extends cliente{
  
        public $cpf;
        public $nome;
        public $email;
        public $sexo;
        public $dataNasc;
        public $endereco;
        public $cidade;
        public $estado;
        public $pais;
        public $area;
        public $salario;
        

        function __construct($vetor)
        {
            parent::__construct($vetor);
            $this->area = $vetor["area"];
            $this->salario = $vetor["salario"];
        
        }

        function exibe()
    {
            $this->exibe_pessoa();
            echo"
                <fieldset>

                <div>	
                    <label>Area:</label> ".$this->area."
                </div>						
                <div>	
                    <label>Salário:</label> ".$this->salario."
                </div>		
                
                </fieldset>  ";
    }

      
        function exibeTR()
            {
             
                $this->exibePessoaTR();
                echo "
                  
                    <td>".$this->area."</td>
                    <td>".$this->salario."</td>
                    </tr>";
            }


        
}

?>