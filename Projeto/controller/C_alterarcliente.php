<?php

    include_once("../model/Cliente.php");
    include_once("../persistence/Connection.php");
    include_once("../persistence/ClienteDAO.php");

    $conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
    $conexao->conectar();

    $clientedao = new ClienteDAO();
    $clientinho = $clientedao->consultarUM($_GET['idcliente'], $conexao->getLink());

?>


<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

	<body>
	<form action="..\controller\C_alterarcliente.php" method="POST">
	<h2>CADASTRO DE CLIENTES</h2>
		Nome <input type="text" name="nome" value=<?= $clientinho["nome"]?> /> <br><br>
		Data de nascimento <input type="text" name="datanascimento" value=<?= $clientinho["nascimento"]?> /> <br><br>
		CPF <input type="text" name="cpf" value=<?= $clientinho["cpf"]?> /> <br><br>


		Sexo <input type="radio" name="sexo" value="Masculino" checked /> Masculino
        <input type="radio" name="sexo" value="Feminino" /> Feminino
		<input type="radio" name="sexo" value="Outro"/> Outro <br><br>

		


		Atendimento especial <input type="radio" name="atendimentoespecial" value="Sim"/> Sim
		<input type="radio" name="atendimentoespecial" value="Nao" checked/> Não <br><br>


		Cidade <input type="text" name="cidade" value=<?= $clientinho["cidade"]?> /> <br><br>
		Endereco <input type="text" name="endereco" value=<?= $clientinho["endereco"]?> /> <br><br>
		Bairro <input type="text" name="bairro" value=<?= $clientinho["bairro"]?> /> <br><br>
		Telefone <input type="number" name="telefone" value=<?= $clientinho["telefone"]?> /> <br><br>
		Celular <input type="number" name="celular" value=<?= $clientinho["celular"]?> /> <br><br>
		E-mail <input type="text" name="email" value=<?= $clientinho["email"]?> /> <br><br>
		<input type="reset" name="reset" value="Limpar dados"/>
		<input type="submit" name="enviar" value="Enviar dados"/>

	</form>
	</body
</html>
