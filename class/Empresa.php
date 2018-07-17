<?php

class Empresa{

    private $id;
    private $razaoSocial;
    private $nomeFantasia;
    private $cpf;
    private $cnpj;
    private $email;
    private $telefone;
    private $endereco;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getRazaoSocial(){
        return $this->razaoSocial;
    }

    public function setRazaoSocial($razaoSocial){
        $this->razaoSocial = $razaoSocial;
    }

    public function getNomeFantasia(){
        return $this->nomeFantasia;
    }

    public function setNomeFantasia($nomeFantasia){
        $this->nomeFantasia = $nomefantasia;
    }

    private function getCpf(){
        return $this->cpf;
    }

    private function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCnpj(){
        return $this->$cnpj;
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
}

?>