<?php

include 'connection.php';

$user = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT lOGIN_USER, KEY_USER FROM USERS WHERE LOGIN_USER = '$user' and KEY_USER = '$password';";

if(mysqli_query($connection, $sql))
{
    echo "sucesso";
    die('xxx');
}
else
{
    echo "falha";
    die('yyy');
    echo (mysqli_error($connection));
}