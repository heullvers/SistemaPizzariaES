<?php

include 'Funcionario.php';

class Garcom extends Funcionario{

    function __construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, 
    $celular, $email, $idFuncionario, $salario, $qntHorasSemanais, $dataAdmissao){

        parent::__construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, 
        $celular, $email, $idFuncionario, $salario, $qntHorasSemanais, $dataAdmissao);

    }
}

?>