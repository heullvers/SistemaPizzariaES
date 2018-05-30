<?php
include 'Pessoa.php';

class Cliente extends Pessoa{

    private $idCliente;
    private $qntContas;
    private $atendimentoEspecial;

    function __construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, 
    $celular, $email, $idCliente, $atendimentoEspecial){

        parent::__construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, $celular, $email);
        $this->idCliente = $idCliente;
        $this->qntContas = 0;
        $this->atendimentoEspecial = $atendimentoEspecial;
    }

}



?>