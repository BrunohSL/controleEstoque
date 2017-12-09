<?php

include 'connection.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];

$password = sha1($password);

$sql = "INSERT INTO USERS (EMAIL_USER, lOGIN_USER, KEY_USER) VALUES ('$email', '$name', '$password');";

if(mysqli_query($connection, $sql))
{
    echo "Cadastro efetuado com sucesso";
}
else
{
    echo "Falha ao efetuar cadastro";
    echo (mysqli_error($connection));
}

// mysqli_close($connection);