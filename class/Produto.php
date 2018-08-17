<?php

class Produto{
    private $id;
    private $codigo;
    private $nome;
    private $valorCompra;
    private $valorVenda;
    private $quantidade;
    private $quantidadeMaxima;
    private $quantidadeMinima;
    private $categoria;
    private $marca;
    private $unidadeMedida;
    private $fornecedor;
    private $usuarioQueCadastrou;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getValorCompra(){
        return $this->valorCompra;
    }

    public function setValorCompra($valorCompra){
        $this->valorCompra = $valorCompra;
    }

    public function getValorVenda(){
        return $this->valorVenda;
    }

    public function setValorVenda($valorVenda){
        $this->valorVenda = $valorVenda;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getQuantidadeMaxima(){
        return $this->quantidadeMaxima;
    }

    public function setQuantidadeMaxima($quantidadeMaxima){
        $this->quantidadeMaxima = $quantidadeMaxima;
    }

    public function getQuantidadeMinima(){
        return $this->quantidadeMinima;
    }

    public function setQuantidadeMinima($quantidadeMinima){
        $this->quantidadeMinima = $quantidadeMinima;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getUnidadeMedida(){
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida){
        $this->unidadeMedida = $unidadeMedida;
    }

    public function getFornecedor(){
        return $this->fornecedor;
    }

    public function setFornecedor($fornecedor){
        $this->fornecedor = $fornecedor;
    }

    public function getUsuarioQueCadastrou(){
        return $this->usuarioQueCadastrou;
    }

    public function setUsuarioQueCadastrou($usuarioQueCadastrou){
        $this->usuarioQueCadastrou = $usuarioQueCadastrou;
    }
}

?>