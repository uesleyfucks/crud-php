<?php include 'func.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Pagina Principal</title>
</head>
<body>
	<div>
		<h1>ADMIN</h1>
		<a href="adm.php">voltar</br></a>

	    <?php
			VerificaMSG();
			ExibirUsuario();
			VerificarEnvio();
	    ?>
	</div>
</body>
</html>