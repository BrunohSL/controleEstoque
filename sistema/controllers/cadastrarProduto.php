<?php

require_once '../../connection.php';
require_once '../../class/Produto.php';

$produto = new Produto();

$produto->setCodigo($_POST['codigoProduto']);
$produto->setNome($_POST['produtoNome']);
$produto->setValorCompra($_POST['valorCompra']);
$produto->setValorVenda($_POST['valorVenda']);
// $produto->quantidade = $_POST['username'];
$produto->setQuantidadeMaxima($_POST['qtdMaxima']);
$produto->setQuantidadeMinima($_POST['qtdMinima']);
// $produto->categoria = $_POST[''];
// $produto->marca = $_POST[''];
// $produto->unidadeMedida = $_POST[''];
// $produto->setFornecedor($_POST['fornecedor']);

// print_r($produto->getCodigo());
// die('zzz');
$codigo = $produto->getCodigo();
$nome = $produto->getNome();
$valorCompra = $produto->getValorCompra();
$valorVenda = $produto->getValorVenda();
$quantidadeMinima = $produto->getQuantidadeMinima();
$quantidadeMaxima = $produto->getQuantidadeMaxima();
// $fornecedor = $produto->getFornecedor();

$sql = "INSERT INTO 
    produto (
        st_codigo_prd, 
        st_nome_prd, 
        vl_compra_prd, 
        vl_venda_prd, 
        qnt_minima_prd, 
        qnt_maxima_prd) 
    VALUES (
        '$codigo',
        '$nome',
        '$valorCompra',
        '$valorVenda',
        '$quantidadeMinima',
        '$quantidadeMaxima');";

if (!mysqli_query($connection, $sql)){
    echo("Error description: " . mysqli_error($connection));
}else{
    header("Location: ../views/estoque.php");
}
