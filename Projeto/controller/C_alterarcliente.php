<?php
    session_start();

    include_once("../model/Cliente.php");
    include_once("../persistence/Connection.php");
    include_once("../persistence/ClienteDAO.php");
    $conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
    $conexao->conectar();

    $nome = $_POST["nome"];
    $nascimento = $_POST["datanascimento"];
    $cpf = $_POST["cpf"];
    $cidade = $_POST["cidade"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $idCliente = $_POST["idcli"];
    $atendimentoEspecial  = $_POST["atendimentoespecial"];
    $qntContas = $_POST["qntC"];


    
    
    $clientedao = new ClienteDAO();
    $clientedao->alterar($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, $celular, 
        $email, $sexo, $idCliente, $atendimentoEspecial, $qntContas, $conexao->getLink());

?>