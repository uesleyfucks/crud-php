<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Pagina Principal</title>
	<script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
</head>
<body>
	<div class="container-cartas">
		<div class="forms-cartas">
			<form action="colecao.php" method="post">
				<h2 class="titulo">Cartas</h2>
				<?php include 'menu.php'?>
				<div class="input-field-cartas">
					<i class="fas fa-user"></i>
					<input type="text" name="cardname" placeholder="Nome da Carta" required>
				</div>
				<div class="input-field-cartas">
					<i class="fas fa-user"></i>
					<select name="tipo" id="tipo" onchange="myFunction(this)">
						<option value="0" selected disabled>--TIPO--</option>
						<option value="Monstro">Monstro</option>
						<option value="Magica">Mágica</option>
						<option value="Armadilha">Armadilha</option>
					</select>
				</div>
				<div class="input-field-cartas" id="atk" style="display: none;">
					<i class="fas fa-user"></i>
					<input type=" number" name="ataque" placeholder="ATK">
				</div>
				<div class="input-field-cartas" id="def" style="display: none;">
					<i class="fas fa-user"></i>
					<input type=" number" name="defesa" placeholder="DEF">
				</div>
				<div class="descricao">
					<textarea name="descricao" rows="5" cols="50" placeholder="Descrição/Efeito"></textarea>
				</div>
				<input type="submit" name="carta" value="Adicionar" class="btn solid">
			</form>
		</div>
	</div>
	<script src="javascript/app.js"></script>
</body>
</html>