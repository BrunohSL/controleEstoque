<?php

include 'connection.php';
include 'logicaUsuario.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = sha1($_POST['password']);
// $idUsuario = $_GET(['ID_USUARIO']);

// function insereUsuario($connection, $email, $name, $password){
//     $sql = "INSERT INTO USERS (EMAIL_USER, lOGIN_USER, KEY_USER) VALUES ('$email', '$name', '$password');";
//     return mysqli_query($connection, $sql);
// }

if(insereUsuario($connection, $email, $name, $password))
{
    echo '<script language="javascript"> swal("Good job!","Cadastrou com sucesso","success"); </script>';
    // echo 'swal("Good job!","Cadastrou com sucesso","success");';
    // echo '</script>';
    header("Location: cadastro.php");
}
else
{
    echo '<script language="javascript">';
    echo 'alert("Erro ao cadastrar")';
    echo '</script>';
    echo (mysqli_error($connection));
}