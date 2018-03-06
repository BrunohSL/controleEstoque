<?php

require_once 'connection.php';

$userForm = $_POST['name'];
$passwordForm = sha1($_POST['password']);

$sql = "SELECT LOGIN_USUARIO, SENHA_USUARIO FROM USUARIOS WHERE LOGIN_USUARIO = '$userForm' AND SENHA_USUARIO = '$passwordForm';";

if($query = mysqli_query($connection, $sql))
{
    $result = mysqli_fetch_assoc($query);
    
    $userDb = $result['LOGIN_USUARIO'];
    $passwordDb = $result['SENHA_USUARIO'];

    if(($userDb == $userForm) && ($passwordDb == $passwordForm)){
        
        $_POST['name'] = $userForm;

        header("Location: sistema/dashboard.php");
    }
    else{
        header("Location: login.php?login=1");
        
        //echo 'Login e/ou senha incorretos';
    }
}
else
{
    echo "falha";
    echo (mysqli_error($connection));
}