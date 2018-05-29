<?php
include 'Pessoa.php';

class Cliente extends Pessoa{

    private $idPessoa;
    private $qntContas;
    private $atendimentoEspecial;

    function __construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, 
    $celular, $email, $idPessooa, $atendimentoEspecial){

        parent::__construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, $celular, $email);
        $this->idPessoa = $idPessoa;
        $this->qntContas = 0;
        $this->atendimentoEspecial = $atendimentoEspecial;
    }

}



?>