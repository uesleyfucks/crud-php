<?php include 'func.php';

 if (!empty($_GET['id'])) 
 {
 	$id = $_GET['id'];
 	DeletarUsuario($id);
 }
else
{
	header('location:edicaoUsuario.php?msg=noid');
}
?>