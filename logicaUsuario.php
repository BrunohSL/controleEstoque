<?php

include 'connection.php';
require_once 'class/Usuario.php';

function insereUsuario($connection, Usuario $usuario){
    $sql = "INSERT INTO USUARIOS (LOGIN_USUARIO, SENHA_USUARIO, EMAIL_USUARIO, NOME_USUARIO) VALUES ('$usuario->login', '$usuario->senha', '$usuario->email', '$usuario->nome');";
    return mysqli_query($connection, $sql);
}

function editaUsuario($connection, Usuario $usuario){
    $sql = "UPDATE USUARIO SET EMAIL_USUARIO = '$usuario->email', LOGIN_USUARIO = '$usuario->nome', ID_USUARIO = '$usuario->id';";
    return mysqli_query($connection, $sql);
}

function excluiUsuario($connection, Usuario $usuario){
    $sql = "DELETE FROM USUARIOS WHERE ID_USUARIO = {$usuario->id}";
    return mysqli_query($connection, $sql);
}

function buscaUsuario($connection){
    $sql = "SELECT * FROM USUARIOS;";
    return mysqli_query($connection, $sql);
}

function buscaUsuarioId($connection, Usuario $usuario){
    $sql = "SELECT * FROM USUARIOS WHERE ID_USUARIO = $usuario->id;";
    $result = mysqli_query($connection, $sql);
    return mysqli_fetch_assoc($result);
}