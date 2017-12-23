<?php

include 'connection.php';

function insereUsuario($connection, $user, $password, $email, $name){
    $sql = "INSERT INTO USERS (LOGIN_USER, KEY_USER, EMAIL_USER, NAME_USER) VALUES ('$user', '$password', '$email', '$name');";
    return mysqli_query($connection, $sql);
}

function editaUsuario($connection, $user, $password, $email, $name){
    $sql = "UPDATE USER SET EMAIL_USER = '$email', lOGIN_USER = '$name', ID_USER = '$idUsuario';";
    return mysqli_query($connection, $sql);
}

function excluiUsuario($connectio, $userId){
    $sql = "DELETE FROM USERS WHERE ID_USER = '$userId';";
    return mysqli_query($connection, $sql);
}