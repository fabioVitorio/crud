<?php 

class Desenvolvedor{

    private $id_cliente;
    private $nome;
    private $cpf;
    private $email;
    private $git;
    private $data_nasc;
    private $funcao;
    private $observacoes;


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

    function getCpf(){
        return $this->cpf;
    }

    function setCpf($cpf){
        return $this->cpf = $cpf;
    }

    function getEmail(){
        return $this->email;
    }

    function setEmail($email){
        return $this->email = $email;
    }

    function getGit(){
        return $this->git;
    }

    function setGit($git){
        return $this->git = $git;
    }

    function getNascimento(){
        return $this->data_nasc;
    }

    function setNascimento($data_nasc){
        return $this->data_nasc = $data_nasc;
    }

    function getFuncao(){
        return $this->funcao;
    }

    function setFuncao($funcao){
        return $this->funcao = $funcao;
    }

    function getObservacoes(){
        return $this->observacoes;
    }

    function setObservacoes($observacoes){
        return $this->observacoes = $observacoes;
    }

}


?>