<?php 
include_once 'conn.php';

//--FUNCOES CADASTRO E LOGIN--
//Verifica envio dos dados de cadastro
function VerificarEnvio()
{
	if (isset($_POST['cadastro'])) 
	{
		ValidarCampos();
	}
}
//Valida os campos do Login
function ValidarCampos() 
{
	$username  = $_POST['username'];
	$email     = $_POST['email'];
	$senha     = $_POST['senha'];
	$erro = 0;

	//Verifica se o campo username tem os padroes.
	$user['username'] = $username;
	//Verifica se o campo email tem os padroes.
	filter_var($email, FILTER_VALIDATE_EMAIL) ? $user['email'] = $email : $erro = 2;
	//Verifica se o campo senha tem os padroes.
	$user['senha'] = $senha;
	
	if(!empty($user['username']) && !empty($user['email']) && !empty($user['senha']))
	{
		CadastrarUsuario($user);
	}
	else{
		header('location:cadastro.php?msg=cadastroerror');
	}
}
//Cadastra usuarios no banco de dados
function CadastrarUsuario($user)
{
	//contacatenação dos valores pra colocar na tabela
	$valores = "'".$user['username']."', 
	           '".$user['email']."', 
	           '".$user['senha']."' ";

	//tornar acesso da '$CONN' global
	global $conn;

	//criar o comando DML
	$sql = "INSERT INTO users_tb (username, email, senha) VALUES ($valores)";
		
		
	//executar comando sql
	$result = mysqli_query($conn, $sql);

	//verificar se o usuario foi cadastrado no banco de dados
	if (mysqli_affected_rows($conn) > 0) 
	{
		header('location:cadastro.php?msg=cadastro_ok');
	}
	else
	{
		echo '<h3>Atenção: ERRO AO CADASTRAR USUARIO!!!!</h3>';
		echo '<a href="index.php">voltar</br></a>';
	}							   	
}
//Exibir Usuarios 
function ExibirUsuario()
{
	//tornar acesso global
	global $conn;

	//montar sql
	$sql = "SELECT * FROM users_tb";

	//executar comando sql
	$result = mysqli_query($conn, $sql);

	//verificar se o comando select retornou alguma coisa
	if(mysqli_affected_rows($conn) > 0)
	{
		echo '<h3>Usuarios Cadastrados:</h3>';
		echo '<p>';
		echo '<table class="tabela-usuario">';
		echo '<th>ID</th>';
		echo '<th>Nome de Usuario</th>';
		echo '<th>Senha </th>';
		echo '<th>Email </th>';
		echo'<th>Ações</th>';
		echo '</tr>';
		//ENQUANTO houverem registros na tabela transforme em um array associativo
		while ($registro = mysqli_fetch_assoc($result)) 
		{
			echo'<tr>';
			//foreach para exibir registros:
			foreach($registro as $indice => $valor)
			{
				if ($indice == "id")
				{
					$id = $valor; //copiando o id atual para a variavel id
				}
				echo'<td>'. $valor . '</td>';
			}

			//monstar links para editar e deletar
			echo '<td>';
				echo '<a href="deletarUsuario.php?id='.$id.'">Deletar</a>';
			echo '</td>';
			echo'</tr>';	
		}
		echo '</table>';
		echo '</p>';
	}
	//SE não tiver cadastro
	else
	{
		echo'<h3>Não há usuarios cadastrados. Utilize o formulário para realizar um cadastro.</h3>';
	}
}
//Deletar Usuarios
function DeletarUsuario($id)
{
	global $conn;

	//cria comando sql
	$sql = "DELETE FROM users_tb WHERE id = $id";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:cadastro.php?msg=delok');
	}
	else
	{
		header('location:cadastro.php?msg=delerror');
	}
}
//FUNCAO DE MENSAGENS
function VerificaMSG()
{
	if(!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];
		if($msg == "delok")
		{
			echo '<h3>Usuario deletado com sucesso!!!</br>';
			echo '<a href="edicaoUsuario.php">Voltar</a></br></h3>';
		}
		else if ($msg == "delerror")
		{
			echo'<h3>Erro ao excluir usuario. Por favor tentar novamente.</h3>';
		}
		else if ($msg == "noid")
		{
			echo'<h3>Não foi possivel realizar a ação solicitada. ID inválido.</h3>';
		}
		else if ($msg =="cadastro_ok")
		{
			echo '<h3>Usuario cadastrado com sucesso!</br></h3>';
			echo '<a href="index.php">voltar</br></a>';
		}
		else if ($msg == "cadastroerror")
		{
			echo'<h3>Erro ao cadastrar usuario. Por favor insira um email válido.</br></h3>';
			echo'<a href="index.php">voltar</br></a>';
		}
	}
}
?>