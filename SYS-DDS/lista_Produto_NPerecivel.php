<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			div{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		
		include("classeProdutoNPerecivel.php");
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Preço</th>
				<th>Unidade</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["produtoNPerecivel"] as $i=>$p){
					$p->exibicao_unitariaTR();
				}
			?>
		</tbody>
	</table>
	</body>
</html>