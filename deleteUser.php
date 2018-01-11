<?php

include 'connection.php';
include 'logicaUsuario.php';
require_once 'class/Usuario.php';

$usuario = new Usuario();

$usuario->id = $_GET['userId'];

if(excluiUsuario($connection, $userId))
{
    echo 'Excluiu com sucesso';
    header("Location: testeCadastro.php");
}
else
{
    echo (mysqli_error($connection));
    header("Location: testeCadastro.php");
}