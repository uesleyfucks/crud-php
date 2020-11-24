<?php include 'func.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Cadastro</title>
</head>
<body>
	<div id="formulario">
		<h1>Cadastro</h1>
		<a href="index.php">voltar a index</br></a>
		<?php
			VerificaMSG();
			VerificarEnvio(); //funcao verificar envio de arquivo
		?>
	</div>
</body>
</html>