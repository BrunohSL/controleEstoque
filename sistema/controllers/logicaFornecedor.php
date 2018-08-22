<?php

require_once '../../connection.php';
require_once '../../class/Fornecedor.php';

function buscaFornecedores($connection){
    $sql = "SELECT * FROM fornecedor;";

    // if (!mysqli_query($connection, $sql)){
    //     echo("Error description: " . mysqli_error($connection));
    // }
    return mysqli_query($connection, $sql);

}
