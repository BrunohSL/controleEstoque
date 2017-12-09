<?php

include 'connection.php';

$userForm = $_POST['name'];
$passwordForm = sha1($_POST['password']);

$sql = "SELECT lOGIN_USER, KEY_USER FROM USERS WHERE lOGIN_USER = '$userForm' AND KEY_USER = '$passwordForm';";

if($query = mysqli_query($connection, $sql))
{
    $result = mysqli_fetch_assoc($query);
    
    $userDb = $result['lOGIN_USER'];
    $passwordDb = $result['KEY_USER'];

    if(($userDb == $userForm) && ($passwordDb == $passwordForm)){
        header("Location: dashboard.php");
    }
    else{
        header("Location: login.php");
        echo 'Login e/ou senha incorretos';
    }
}
else
{
    echo "falha";
    echo (mysqli_error($connection));
}