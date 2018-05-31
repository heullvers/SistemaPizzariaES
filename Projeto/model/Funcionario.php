<?php
include 'Pessoa.php';

class Funcionario extends Pessoa{

    private $idFuncionario;
    private $salario;
    private $qntHorasSemanais;
    private $dataAdmissao;

    function __construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, 
    $celular, $email, $sexo, $idFuncionario, $salario, $qntHorasSemanais, $dataAdmissao){

        parent::__construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, $celular, $email, $sexo);
        $this->idFuncionario = $idFuncionario;
        $this->salario = $salario;
        $this->qntHorasSemanais = $qntHorasSemanais;
        $this->dataAdmissao = $dataAdmissao;
    }

    

}



?>