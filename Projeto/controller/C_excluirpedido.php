<?php

    session_start();
    include_once("../model/Pedido.php");
    include_once("../persistence/Connection.php");
    include_once("../persistence/PedidoDAO.php");

    $conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
    $conexao->conectar();

    $pedidodao = new PedidoDAO();
    $pedidodao->excluir($conexao->getLink());

?>