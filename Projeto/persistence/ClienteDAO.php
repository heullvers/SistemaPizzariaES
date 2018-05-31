<?php

include_once("../model/Cliente.php");

    class ClienteDAO{


    public function cadastrar($cliente, $link){
            
        //$query = "INSERT INTO cliente(nome,nascimento,salario) values('". $cliente->getNome()."', '".$cliente->getNascimento() ."', ". $cliente->getSalario().")";
        /*
        $query = "INSERT INTO cliente (nome, nascimento, cpf, cidade, endereco, bairro, telefone, 
        celular, email, quantidadecontas, atendimentoespecial, sexo) VALUES ('Heuller', '1998-06-15', '11120699681', 'SGS', 
        'Rua Pernambuco','Santa Rita', '3532412537', '35997354331', 'heuller555@gmail.com', 0, False, 'M')";
        echo $query;
        */

        $query = "INSERT INTO cliente (nome, nascimento, cpf, cidade, endereco, bairro, telefone, 
        celular, email, quantidadecontas, atendimentoespecial, sexo) VALUES ('". $cliente->getNome()."', '". $cliente->getNascimento()."', '". $cliente->getCpf()."',
        '". $cliente->getCidade()."', '". $cliente->getEndereco()."','". $cliente->getBairro()."', '". $cliente->getTelefone()."', '". $cliente->getCelular()."', 
        '". $cliente->getEmail()."',". $cliente->getQntContas().",  '". $cliente->getAtendimentoEspecial()."', '". $cliente->getSexo()."')";

        echo $query;
        
        

        if(!pg_query($link, $query)){

            die("ERRO! Os dados não foram salvos.");
        }

        echo "Os dados foram salvos";
                
    }

}

?>
