<?php

session_start();
include_once("../model/Pedido.php");
include_once("../persistence/Connection.php");
include_once("../persistence/PedidoDAO.php");



$pedido = new Pedido(null, $_POST["idFuncionario"], $_POST["idPizza"], $_POST["idBebida"], 
 $_POST["observacoes"], $_POST["mesa"],$_POST["entrega"], null, $_POST["idConta"], null );

$conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
$conexao->conectar();

$pedidodao = new PedidoDAO();
$pedidodao->cadastrar($pedido, $conexao->getLink());

?>