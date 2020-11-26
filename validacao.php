<?php 
	
	//senao armazena os dados do form em var locais
	$username = $_POST['username'];
	$senha = $_POST['senha'];

	//inclui arquivo de conexao
	include_once 'conn.php';

	//cria comando sql bscando na tabela 'users tb' que tenha a mesma coisa informados
	$sql = "SELECT * FROM users_tb WHERE username LIKE '$username' AND senha LIKE '$senha'";

	//executa comando sql
	$result = mysqli_query($conn, $sql);

	//se foi exsecutado corretamente(se user existe na tabela)
	if(mysqli_affected_rows($conn) > 0)
	{
		//transforma em array associativo
		$login = mysqli_fetch_assoc($result);

		//iniciar a sessão
		session_start();

		//registrar variaveis de sessao
		$_SESSION['id']  = $login['id'];
		$_SESSION['username'] = $login['username'];
		$_SESSION['senha'] = $login['senha'];
		$_SESSION['email']    = $login['email'];

		//depois de logado manda pra a pagina principal

		//caso for ADM ira mandar para a pagina adm.php
		if(($username == 'admin') && $senha == 'admin')
		{
			header('location:edicaoUsuario.php');
		}
		else
		{
			header('location:cartas.php');
		}
		
	}
	else//se o user ou password tiverem errados
	{
		header('location:index.php?msg=invalid');
	}



?>