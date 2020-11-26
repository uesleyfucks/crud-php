<?php include 'func.php';

if(isset($_POST['editar']))
{
    $carta['id'] = $_POST['id'];
    $carta['cardname'] = $_POST['cardname'];
    $carta['tipo'] = $_POST['tipo'];
    $carta['ataque'] = $_POST['ataque'];
    $carta['defesa'] = $_POST['defesa'];
    $carta['descricao'] = $_POST['descricao'];

    EditarCarta($carta);
}
else
{
    header('location:colecao.php?msg=noedt');

}

?>