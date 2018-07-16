<?php

require_once 'connection.php';
require_once 'class/Usuario.php';

function insereUsuario($connection, Usuario $usuario){
    $sql = "INSERT INTO usuario (st_login_usu, st_senha_usu, st_email_usu, st_nome_usu) VALUES ('$usuario->login', '$usuario->senha', '$usuario->email', '$usuario->nome');";
    return mysqli_query($connection, $sql);
}

function updateUser($connection, Usuario $user){
    $sql = "UPDATE usuario SET st_email_usu = '$user->email', st_nome_usu = '$user->nome', st_login_usu = '$user->login' where id_usuario_usu = $user->id;";
    return mysqli_query($connection, $sql);
}

function excluiUsuario($connection, Usuario $usuario){
    $sql = "DELETE FROM usuario WHERE id_usuario_usu = {$usuario->id}";
    return mysqli_query($connection, $sql);
}

function buscaUsuario($connection){
    $sql = "SELECT * FROM usuario;";
    return mysqli_query($connection, $sql);
}

function buscaUsuarioId($connection, $id){
    $sql = "SELECT * FROM usuario WHERE id_usuario_usu = $id;";
    $result = mysqli_query($connection, $sql);
    var_dump($result);
    return mysqli_fetch_assoc($result);
}
