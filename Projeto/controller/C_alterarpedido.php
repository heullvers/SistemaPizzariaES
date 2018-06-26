<?php
    session_start();

    include_once("../model/Pedido.php");
    include_once("../persistence/Connection.php");
    include_once("../persistence/PedidoDAO.php");
    $conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
    $conexao->conectar();
    //tem que arrumar isso aqui
    $idpedido = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $nascimento = filter_input(INPUT_POST, 'datanascimento', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING); 
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING); 
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING); 
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING); 
    $celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING); 
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING); 
    $sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING); 
    $idCliente = filter_input(INPUT_POST, 'idcli', FILTER_SANITIZE_NUMBER_INT); 
    $atendimentoEspecial  = filter_input(INPUT_POST, 'atendimentoespecial', FILTER_SANITIZE_STRING);
    $qntContas = filter_input(INPUT_POST, 'qntC', FILTER_SANITIZE_NUMBER_INT); 
    
    
    $clientedao = new ClienteDAO();
    $clientedao->alterar($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, $celular, 
        $email, $sexo, $idCliente, $atendimentoEspecial, $qntContas, $conexao->getLink());

?>