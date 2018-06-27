<?php
    session_start();

    include_once("../model/Pedido.php");
    include_once("../persistence/Connection.php");
    include_once("../persistence/PedidoDAO.php");
    $conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
    $conexao->conectar();

    //tem que arrumar isso aqui
    $idpedido = $_POST["idpedido"];
    $idfuncionario = $_POST["idfuncionario"];
    $idpizza = $_POST["idpizza"];
    $idbebida = $_POST["idbebida"];
    $idconta = $_POST["idconta"];
    $observacoes = $_POST["observacoes"];
    $mesa =  $_POST["mesa"];
    $entrega = $_POST["entrega"]; 
    
    $pedidodao = new PedidoDAO();
    $pedidodao->alterar($idpedido, $idfuncionario, $idpizza, $idbebida, $idconta, $observacoes, $mesa, $entrega, $conexao->getLink());

?>