<?php

include 'Garcom.php';

class Caixa extends Garcom{

    function __construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, 
    $celular, $email, $idFuncionario, $salario, $qntHorasSemanais, $dataAdmissao){

        parent::__construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, 
        $celular, $email, $idFuncionario, $salario, $qntHorasSemanais, $dataAdmissao);

    }
    
}

?>