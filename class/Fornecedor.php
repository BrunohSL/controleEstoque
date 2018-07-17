<?php

class Fornecedor{

    private $id;
    private $razaoSocial;
    private $nomeFantasia;
    private $cpf;
    private $cnpj;
    private $site;
    private $telefone;
    private $email;
    private $endereco;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    private function getRazaoSocial(){
        return $this->razaoSocial;
    }

    private function setRazaoSocial($razaoSocial){
        $this->razaoSocial = $razaoSocial;
    }

    private function getNomeFantasia(){
        return $this->nomeFantasia;
    }

    private function setNomeFantasia($nomeFantasia){
        $this->nomeFantasia = $nomeFantasia;
    }

    private function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCnpj(){
        return $cnpj;
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function getSite(){
        return $this->site;
    }

    public function setSite($site){
        $this->site = $site;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
}

?>