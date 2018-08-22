<?php

require_once '../../connection.php';
require_once '../../class/Produto.php';

function buscaProdutos($connection){
    $sql = "SELECT * FROM produto;";
    // print_r($sql);
    // die('ppp');
    // if (!mysqli_query($connection, $sql)){
    //     echo("Error description: " . mysqli_error($connection));
    // }
    return mysqli_query($connection, $sql);
    // var_dump($teste);
    // die('zzz');
}
