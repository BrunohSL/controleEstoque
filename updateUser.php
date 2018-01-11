<?php

include 'connection.php';
include 'logicaUsuario.php';
require_once 'class/Usuario.php';

$usuario = new Usuario();

$usuario->id = $_GET['userId'];

$sql = buscaUsuarioId($connection, $usuario->id);

if(isset($sql))
{
    echo 'Teste alteração';
    header("Location: testeUpdate.php?userName=".$sql['NOME_USUARIO']."&userEmail=".$sql['EMAIL_USUARIO']."&loginUser=".$sql['LOGIN_USUARIO']);
}
// else
// {
//     echo (mysqli_error($connection));
//     header("Location: testeCadastro.php");
// }