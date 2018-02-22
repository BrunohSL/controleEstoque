<?php

require_once 'connection.php';
require_once 'logicaUsuario.php';
require_once 'class/Usuario.php';

$user = new Usuario();

$user->id = $_GET['userId'];

// print_r($user->id);
// die('xxx');

$user->nome = $_POST['name'];
$user->email = $_POST['email'];
$user->login = $_POST['login'];

// print_r($user->email);
// die('xxx');

// $sql = updateUser($connection, $user);

// die(print_r($sql));

// print_r($sql);
// die('xxx');

if(updateUser($connection, $user)){
    echo 'Teste alteração';
    header("Location: testeCadastro.php");
} else {
    echo (mysqli_error($connection));
    header("Location: testeUpdate.php");
}
