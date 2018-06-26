<?php

session_start();
include_once("../model/Cliente.php");
include_once("../persistence/Connection.php");
include_once("../persistence/ClienteDAO.php");

$cliente = new Cliente($_POST["nome"], $_POST["datanascimento"], $_POST["cpf"], $_POST["cidade"], 
$_POST["endereco"], $_POST["bairro"], $_POST["telefone"],$_POST["celular"], $_POST["email"], $_POST["sexo"], null, $_POST["atendimentoespecial"]);

//$cliente = new Cliente(null, $_POST["nome"], $_POST["nascimento"], $_POST["salario"]); //nome nascimento salario é a variável no html


$conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
$conexao->conectar();

$clientedao = new ClienteDAO();
$clientedao->cadastrar($cliente, $conexao->getLink());

?>