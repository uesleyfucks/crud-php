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
		<h1>Coleção</h1>
		<?php
			VerificaMSG();
            VerificarEnvioCarta(); //funcao verificar envio de arquivo
            ExibirCarta();
		?>
	</div>
</body>
</html>