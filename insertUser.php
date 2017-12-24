<?php

include 'connection.php';
include 'logicaUsuario.php';

$user = $_POST['username'];
$password = sha1($_POST['password']);
$email = $_POST['email'];
$name = $_POST['name'];

if(insereUsuario($connection, $user, $password, $email, $name))
{
    // echo '<script language="javascript"> swal("Good job!","Cadastrou com sucesso","success"); </script>';
    // echo 'swal("Good job!","Cadastrou com sucesso","success");';
    // echo '</script>';
    echo 'Cadastrou com sucesso';
    header("Location: testeCadastro.php");
}
else
{
    // echo '<script language="javascript">';
    // echo 'alert("Erro ao cadastrar")';
    // echo '</script>';
    echo (mysqli_error($connection));
    header("Location: testeCadastro.php");
}