<?php

include 'connection.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = sha1($_POST['password']);

function insereUsuario($connection, $email, $name, $password){
    $sql = "INSERT INTO USERS (EMAIL_USER, lOGIN_USER, KEY_USER) VALUES ('$email', '$name', '$password');";
    return mysqli_query($connection, $sql);
}



if(insereUsuario($connection, $email, $name, $password))
{
    echo "Cadastro efetuado com sucesso";
}
else
{
    echo "Falha ao efetuar cadastro";
    echo (mysqli_error($connection));
}

// mysqli_close($connection);