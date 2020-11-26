<?php 
include 'func.php';
include_once 'lock.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Usuarios</title>
</head>
<body>
	<div>
		<h1>ADMIN</h1>
		<?php
			include_once 'menuAdm.php';
			VerificaMSG();
			ExibirUsuario();
			VerificarEnvio();
	    ?>
	</div>
</body>
</html>