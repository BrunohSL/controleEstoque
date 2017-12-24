<?php

include 'connection.php';
include 'logicaUsuario.php';

$userId = $_GET['userId'];
// print_r($userId);
// die('xxx');
$sql = buscaUsuarioId($connection, $userId);

if(isset($sql))
{
    echo 'Teste alteração';
    header("Location: testeCadastro.php?userName=".$sql['NAME_USER']."?userEmail=".$sql['EMAIL_USER']."?loginUser=".$sql['LOGIN_USER']);
}
else
{
    echo (mysqli_error($connection));
    header("Location: testeCadastro.php");
}