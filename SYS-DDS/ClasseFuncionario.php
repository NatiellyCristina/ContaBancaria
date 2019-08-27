<?php

include("ClasseCliente.php");
class  funcionario extends cliente{

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
        public $turno;

        
        function __construct($vetor)
        {
            parent::__construct($vetor);
            $this->area = $vetor["area"];
            $this->salario = $vetor["salario"];
            $this->turno = $vetor["turno"];
        
        }

        function exibe()
    {
            $this->exibe_pessoa();
            echo"
                <fieldset>

                <div>	
                    <label>Área:</label> ".$this->area."
                </div>						
                <div>	
                    <label>Salário:</label> ".$this->salario."
                </div>
                <div>	
                   <label>Turno:</label> ".$this->turno."
                </div>						
                
                </fieldset>";
    }

      
        function exibeTR()
            {
             
                $this->exibePessoaTR();
                echo "
                  
                    <td>".$this->area."</td>
                    <td>".$this->salario."</td>
                    <td>".$this->turno."</td>
                    </tr>";
            }


        
}