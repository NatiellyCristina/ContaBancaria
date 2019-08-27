<?php
	include "classeProduto.php";
	class ProdutoPerecivel extends Produto{		
		public $validade;
        
		public function __construct($vetor){
			parent::__construct($vetor);
			$this->validade = $vetor["validade"];
        }	
        
        function exibicao_unitaria(){
			
            $this->exibe_produto();
			
			echo    "<div>	
						<label>Validade:</label> ".$this->validade."
					</div>											
			  </fieldset>";
		}
		 function exibicao_unitariaTR(){
			
			$this->exibeproduto_tr();
			
            echo "
            
				<td>".$this->validade."</td>
                </tr>";
        }
	}
	
?>