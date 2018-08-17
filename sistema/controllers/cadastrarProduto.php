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
$produto->setFornecedor($_POST['fornecedor']);

// print_r($produto->getCodigo());
// die('zzz');
$codigo = $produto->getCodigo();
$nome = $produto->getNome();
$valorCompra = $produto->getValorCompra();
$valorVenda = $produto->getValorVenda();
$quantidadeMinima = $produto->getQuantidadeMinima();
$quantidadeMaxima = $produto->getQuantidadeMaxima();
$fornecedor = $produto->getFornecedor();

$sql = "INSERT INTO 
    produto (
        st_codigo_prd, 
        st_nome_prd, 
        vl_compra_prd, 
        vl_venda_prd, 
        qnt_minima_prd, 
        qnt_maxima_prd, 
        id_categoria_cat, 
        id_marca_mar, 
        id_unidade_medida_uni, 
        id_fornecedor_for, 
        id_usuario_usu) 
    VALUES (
        '$codigo',
        '$nome',
        '$valorCompra',
        '$valorVenda',
        '$quantidadeMinima',
        '$quantidadeMaxima',
        '1',
        '1',
        '1',
        '$fornecedor',
        '1');";

if (!mysqli_query($connection, $sql)){
    echo("Error description: " . mysqli_error($connection));
}

// $response = mysqli_query($connection, $sql);

// var_dump($sql);
// die('xxx');
