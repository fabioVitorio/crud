<?php 

class Cliente{

    private $id_cliente;
    private $nome;
    private $sobrenome;
    private $email;
    private $data_nasc;
    private $endereco;
    private $estado;


    function getId(){
        return $this->id_cliente;
    }

    function setId($id_cliente){
        return $this->id_cliente = $id_cliente;
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        return $this->nome = $nome;
    }

    function getSobrenome(){
        return $this->sobrenome;
    }

    function setSobrenome($sobrenome){
        return $this->sobrenome = $sobrenome;
    }

    function getEmail(){
        return $this->email;
    }

    function setEmail($email){
        return $this->email = $email;
    }

    function getNascimento(){
        return $this->data_nasc;
    }

    function setNascimento($data_nasc){
        return $this->data_nasc = $data_nasc;
    }

    function getEndereco(){
        return $this->endereco;
    }

    function setEndereco($endereco){
        return $this->endereco = $endereco;
    }

    function getEstado(){
        return $this->estado;
    }

    function setEstado($estado){
        return $this->estado = $estado;
    }

}





?>