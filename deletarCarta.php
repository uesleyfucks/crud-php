<?php include 'func.php';

 if (!empty($_GET['id'])) 
 {
 	$id = $_GET['id'];
 	DeletarCarta($id);
 }
else
{
	header('location:colecao.php?msg=noid');
}
?>