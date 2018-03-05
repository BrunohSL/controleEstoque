<?php

require_once 'connection.php';
require_once 'class/Usuario.php';

function insereUsuario($connection, Usuario $usuario){
    $sql = "INSERT INTO USUARIOS (LOGIN_USUARIO, SENHA_USUARIO, EMAIL_USUARIO, NOME_USUARIO) VALUES ('$usuario->login', '$usuario->senha', '$usuario->email', '$usuario->nome');";
    return mysqli_query($connection, $sql);
}

function updateUser($connection, Usuario $user){
    $sql = "UPDATE USUARIOS SET EMAIL_USUARIO = '$user->email', NOME_USUARIO = '$user->nome', LOGIN_USUARIO = '$user->login' WHERE ID_USUARIO = $user->id;";
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

function buscaUsuarioId($connection, $id){
    $sql = "SELECT * FROM USUARIOS WHERE ID_USUARIO = $id;";
    $result = mysqli_query($connection, $sql);
    var_dump($result);
    return mysqli_fetch_assoc($result);
}
