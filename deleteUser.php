<?php

include 'connection.php';
include 'logicaUsuario.php';

$userId = $_GET['userId'];

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