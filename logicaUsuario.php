<?php

include 'connection.php';

function insereUsuario($connection, $user, $password, $email, $name){
    $sql = "INSERT INTO USERS (LOGIN_USER, KEY_USER, EMAIL_USER, NAME_USER) VALUES ('$user', '$password', '$email', '$name');";
    return mysqli_query($connection, $sql);
}

function editaUsuario($connection, $nome, $email, $login){
    $sql = "UPDATE USER SET EMAIL_USER = '$email', LOGIN_USER = '$name', ID_USER = '$idUsuario';";
    return mysqli_query($connection, $sql);
}

function excluiUsuario($connection, $id){
    $sql = "DELETE FROM USERS WHERE ID_USER = {$id}";
    return mysqli_query($connection, $sql);
}

function buscaUsuario($connection){
    $sql = "SELECT * FROM USERS;";
    return mysqli_query($connection, $sql);
}

function buscaUsuarioId($connection, $userId){
    $sql = "SELECT * FROM USERS WHERE ID_USER = $userId;";
    $result = mysqli_query($connection, $sql);
    return mysqli_fetch_assoc($result);
}