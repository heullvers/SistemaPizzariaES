<?php

class Pessoa{

    private $nome;
    private $nascimento;
    private $cpf;
    private $cidade;
    private $endereco;
    private $bairro;
    private $telefone;
    private $celular;
    private $email;
 
    function __construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, $celular, $email){

        $this->nome = $nome;
        $this->nascimento = $nascimento;
        $this->cpf = $cpf;
        $this->cidade = $cidade;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->email = $email;
    }

    

    

}





?>