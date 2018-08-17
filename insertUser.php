<?php

require_once 'connection.php';
require_once 'logicaUsuario.php';
require_once 'class/Usuario.php';

$usuario = new Usuario();

$usuario->login = $_POST['username'];
$usuario->senha = sha1($_POST['password']);
$usuario->email = $_POST['email'];
$usuario->nome = $_POST['name'];

if(insereUsuario($connection, $usuario)){
    // echo '<script language="javascript"> swal("Good job!","Cadastrou com sucesso","success"); </script>';
    // echo 'swal("Good job!","Cadastrou com sucesso","success");';
    // echo '</script>';
    echo 'Cadastrou com sucesso';
    header("Location: testeCadastro.php");
}
else{
    // echo '<script language="javascript">';
    // echo 'alert("Erro ao cadastrar")';
    // echo '</script>';
    echo (mysqli_error($connection));
    header("Location: testeCadastro.php");
}