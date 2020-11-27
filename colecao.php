<?php include 'func.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/icones.css">
	<title>Cadastro</title>
</head>
<body>
	<div class="colecao">
		<div class="colecContent">
			<h2 class="titulo">Coleção de Cartas</h2>
			<?php
				include 'menu.php';
				VerificaMSG();
            	VerificarEnvioCarta(); //funcao verificar envio de arquivo
            	ExibirCarta();
			?>
		</div>
</body>
</html>