<?php

require_once 'connection.php';
session_start();

$userForm = $_POST['name'];
$passwordForm = sha1($_POST['password']);

$sql = "SELECT st_login_usu, st_senha_usu FROM usuario WHERE st_login_usu = '$userForm' AND st_senha_usu = '$passwordForm';";

if($query = mysqli_query($connection, $sql)){

    $result = mysqli_fetch_assoc($query);
    
    $userDb = $result['st_login_usu'];
    $passwordDb = $result['st_senha_usu'];

    if(($userDb == $userForm) && ($passwordDb == $passwordForm)){
        
        $_POST['name'] = $userForm;
        $_SESSION["sessao"] = $userDb;
        header("Location: sistema/views/dashboard.php");
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