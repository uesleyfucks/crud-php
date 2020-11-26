<?php if(!empty($_GET['id'])): ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
	<title>Editar Cartas</title>
</head>
<body>
	<div>
	<?php 
	include 'func.php';

	$id = $_GET['id'];
	$carta = CartaEdt($id);

	if ($carta != null):
	?>

    <div class="container-cartas">
		<div class="forms-cartas">
			<form action="cartaEditada.php" method="post">
				<h2 class="titulo">Editar Carta</h2>
				<?php include 'menu.php'?>
				<div class="input-field-cartas">
					<i class="fas fa-user"></i>
					<input type="text" name="cardname" value="<?php echo $carta['cardname']; ?>">
				</div>
				<div class="input-field-cartas">
					<i class="fas fa-user"></i>
					<select name="tipo" id="tipo" onchange="myFunction(this)" value="<?php echo $carta['tipo']; ?>">
						<option value="0" selected disabled>--TIPO--</option>
						<option value="Monstro">Monstro</option>
						<option value="Magica">Mágica</option>
						<option value="Armadilha">Armadilha</option>
					</select>
				</div>
				<div class="input-field-cartas" id="atk" style="display: none;">
					<i class="fas fa-user"></i>
					<input type=" number" name="ataque" value="<?php echo $carta['ataque']; ?>">
				</div>
				<div class="input-field-cartas" id="def" style="display: none;">
					<i class="fas fa-user"></i>
					<input type=" number" name="defesa" value="<?php echo $carta['defesa']; ?>">
				</div>
				<div class="descricao">
					<textarea name="descricao" rows="5" cols="50" value="<?php echo $carta['descricao']; ?>"></textarea>
				</div>
                <input type="hidden" name="id" value="<?php echo $carta['id']; ?>">
				<input type="submit" name="editar" value="Editar" class="btn solid">
			</form>
		</div>
	</div>
	<script src="javascript/app.js"></script>

	<?php else: echo '<h3> Erro ao carregar carta solicitada </h3>'; endif; ?>
	</div>
</body>
</html>
<?php else: header('location:colecao.php?msg=noid');endif; ?>