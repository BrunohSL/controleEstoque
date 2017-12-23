<?php

include 'connection.php';

function insereUsuario($connection, $email, $name, $password){
    $sql = "INSERT INTO USERS (EMAIL_USER, lOGIN_USER, KEY_USER) VALUES ('$email', '$name', '$password');";
    return mysqli_query($connection, $sql);
}

function editaUsuario($connection, $email, $name, $password, $userId){
    $sql = "UPDATE USER SET EMAIL_USER = '$email', lOGIN_USER = '$name', ID_USER = '$idUsuario';";
    return mysqli_query($connection, $sql);
}

function excluiUsuario($connectio, $userId){
    $sql = "DELETE FROM USERS WHERE ID_USER = '$userId';";
    return mysqli_query($connection, $sql);
}