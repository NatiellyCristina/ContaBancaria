    
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			input{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("cabecalho.php");
	?>
		<form method="post" action="cadastra_produto_Nperecivel.php">
			<?php include "form_produto.php";?>
			<input type="submit" value="cadastrar" /> <br />	
			
		</form>
	</body>
</html