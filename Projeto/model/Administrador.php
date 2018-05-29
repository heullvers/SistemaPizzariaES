<?php

include 'Caixa.php';

class Administrador extends Caixa{

    function __construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, 
    $celular, $email, $idFuncionario, $salario, $qntHorasSemanais, $dataAdmissao){

        parent::__construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, 
        $celular, $email, $idFuncionario, $salario, $qntHorasSemanais, $dataAdmissao);

    }
    
}

?>