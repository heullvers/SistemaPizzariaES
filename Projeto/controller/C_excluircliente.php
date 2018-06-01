<?php

    include_once("../model/Cliente.php");
    include_once("../persistence/Connection.php");
    include_once("../persistence/ClienteDAO.php");

    $conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
    $conexao->conectar();

    $clientedao = new ClienteDAO();
    $clientedao->excluir($conexao->getLink());

?>