<?php include 'func.php';

 if (!empty($_GET['id'])) 
 {
 	$id = $_GET['id'];
 	DeletarUsuario($id);
 }
else
{
	header('location:adm.php?msg=noid');
}
?>