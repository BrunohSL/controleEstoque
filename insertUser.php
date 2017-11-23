<?php

include 'connection.php';

$email = $_POST['email'];
$name = $_POST['name'];
$key = $_POST['key'];

$sql = "INSERT INTO USERS (EMAIL_USER, lOGIN_USER, KEY_USER) VALUES ('$email', '$name', '$key');";

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