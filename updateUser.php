<?php

include 'connection.php';
include 'logicaUsuario.php';

$userId = $_GET['userId'];

$sql = buscaUsuarioId($connection, $userId);
// print_r($sql);die('2222');
if(isset($sql))
{
    echo 'Teste alteração';
    header("Location: testeUpdate.php?userName=".$sql['NAME_USER']."&userEmail=".$sql['EMAIL_USER']."&loginUser=".$sql['LOGIN_USER']);
}
// else
// {
//     echo (mysqli_error($connection));
//     header("Location: testeCadastro.php");
// }