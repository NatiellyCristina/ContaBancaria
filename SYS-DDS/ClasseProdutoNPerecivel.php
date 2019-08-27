<?php
	include "classeProduto.php";
    class ProdutoNPerecivel extends Produto{		
        
		public function __construct($vetor){
			parent::__construct($vetor);
        }	
        
		function exibicao_unitaria(){
			
			$this->exibe_produto();
			
		}
		 function exibicao_unitariaTR(){
			
			$this->exibeproduto_tr();
			
        }
	}
	
?>