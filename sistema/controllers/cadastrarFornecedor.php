<?php

require_once '../../connection.php';
require_once '../../class/Fornecedor.php';

$fornecedor = new Fornecedor();
// var_dump($fornecedor);
// die('teste');
$fornecedor->setRazaoSocial($_POST['razaoSocial']);
// var_dump($fornecedor);
// die('teste');
$fornecedor->setNomeFantasia($_POST['nomeFantasia']);
// print_r(strlen($_POST['cpfCnpj']));
// print_r($_POST['cpfCnpj']);
// die('minha rola');
// die('teste');
if(strlen($_POST['cpfCnpj']) > 11){
    // print_r('caiu aqui no if');
    // die('zz');
    $fornecedor->setCnpj($_POST['cpfCnpj']);
    $cnpj = $fornecedor->getCnpj();
    $cpf = null;
} else {
    // print_r('caiu aqui no else');
    // die('xx');
    $fornecedor->setCpf($_POST['cpfCnpj']);
    $cpf = $fornecedor->getCpf();
    $cnpj = null;
}
// die('teste');
$fornecedor->setSite($_POST['site']);
$fornecedor->setTelefone($_POST['telefone']);
$fornecedor->setEmail($_POST['email']);
// $fornecedor->setEndereco($_POST['qtdMinima']);

$razaoSocial = $fornecedor->getRazaoSocial();
$nomeFantasia = $fornecedor->getNomeFantasia();
$site = $fornecedor->getSite();
$telefone = $fornecedor->getTelefone();
$email = $fornecedor->getEmail();
// $endereco = $fornecedor->getEndereco();



$sql = "INSERT INTO 
    fornecedor (
        st_razao_social_for,
        st_nome_fantasia_for,
        st_cpf_for,
        st_cnpj_for,
        st_site_for,
        st_telefone_for,
        st_email_for)
    VALUES (
        '$razaoSocial',
        '$nomeFantasia',
        '$cpf',
        '$cnpj',
        '$site',
        '$telefone',
        '$email');";

// print_r($sql);
// die('lll');

// print_r($fornecedor->getRazaoSocial());
//     die('lll');

if (!mysqli_query($connection, $sql)){
    echo("Error description: " . mysqli_error($connection));
}else{
    header("Location: ../views/fornecedores.php");
}
