<?php

class Usuario {

    public $id;
    public $nome;
    public $login;
    public $email;
    public $senha;
    // public $telefone;
    // public $endereco;

    public function getId(){
        return $this->$id;
    }

    public function setId($id){
        $this->$id = $id;
    }

    public function getName(){
        return $this->$nome;
    }

    public function setName($nome){
        $this->$nome = $nome;
    }

    public function getLogin(){
        return $this->$login;
    }

    public function setLogin($login){
        $this->$login = $login;
    }

    public function getEmail(){
        return $this->$email;
    }

    public function setEmail($email){
        $this->$email = $email;
    }

    public function getSenha(){
        return $this->$senha;
    }

    public function setSenha($senha){
        $this->$senha = $senha;
    }

    
}
?>