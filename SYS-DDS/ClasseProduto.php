<?php
class Produto{
	public $nome;
    public $descricao;
    public $tipo;
	public $unidade;
	public $preco;
	
	
	function __construct($vetor){
		$this->nome = $vetor["nome"];
        $this->descricao = $vetor["descricao"];
        $this->tipo = $vetor["tipo"];
		$this->unidade = $vetor["unidade"];
		$this->preco = $vetor["preco"];
	}
	
	function exibe_produto(){
		echo "<fieldset>
					<div>
						<label>Nome:</label> ".$this->nome."
					</div>
					<div>
						<label>Descrição:</label> ".$this->descricao."
					</div>
					<div>
						<label>Tipo:</label> ".$this->tipo."
					</div>
					<div>	
						<label>Preço/Unidade:</label>
							R$ ".$this->preco." / ".$this->unidade." 
					</div>
			  </fieldset>";
	}
	
	function exibeproduto_tr(){
		echo "<tr>
				<td>".$this->nome."</td>
				<td>".$this->descricao."</td>
				<td>".$this->preco."</td>
				<td>".$this->unidade."</td>
			  ";
	}
}
?>