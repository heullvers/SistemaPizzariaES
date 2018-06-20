<?php

    include_once("../model/Cliente.php");
    include_once("../persistence/Connection.php");
	include_once("../persistence/ClienteDAO.php");
	
	if(!isset($_GET['idcliente']))
		echo "<script>alert('Codigo invalido.'); location.href=..\index.html;</script>";
	else{
		
		$idcliente = intval($_GET['idcliente']);
		$conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
    	$conexao->conectar();

		$clientedao = new ClienteDAO();
		$clientinho = $clientedao->consultarUM($idcliente, $conexao->getLink());

?>


<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

	<body>
	<form action="..\controller\C_alterarcliente.php" method="POST">
	<h2>EDIÇÃO DE CLIENTES</h2>


		<input type="hidden" name="idcli" value=<?= $clientinho["idcliente"]?>></input>
		<input type="hidden" name="qntcontas" value=<?= $clientinho["quantidadecontas"]?>></input>

		Nome <input type="text" name="nome" value=<?= $clientinho["nome"]?> /> <br><br>
		Data de nascimento <input type="text" name="datanascimento" value=<?= $clientinho["nascimento"]?> /> <br><br>
		CPF <input type="text" name="cpf" value=<?= $clientinho["cpf"]?> /> <br><br>


		<?php $sexo = $clientinho["sexo"]; ?>
		<?php $at = $clientinho["atendimentoespecial"]; ?>

		Sexo <input type="radio" name="sexo" value="Masculino" <?php echo ($sexo =="Masculino") ? "checked" : null;?> /> Masculino
		<input type="radio" name="sexo" value="Feminino" <?php  echo ($sexo =="Feminino") ? "checked" : null;?> /> Feminino 
		<input type="radio" name="sexo" value="Outro" <?php echo ($sexo =="Outro") ? "checked" : null;?>/> Outro <br><br>


		

		
		

		Atendimento especial <input type="radio" name="atendimentoespecial" 
		value="Sim" <?php echo ($at =="Sim") ? "checked" : null;?>/> Sim
		<input type="radio" name="atendimentoespecial" value="Não" <?php echo ($at =="Não") ? "checked" : null;?>/> Não <br><br>


		






		Cidade <input type="text" name="cidade" value=<?= $clientinho["cidade"]?> /> <br><br>
		Endereco <input type="text" name="endereco" value=<?= $clientinho["endereco"]?> /> <br><br>
		Bairro <input type="text" name="bairro" value=<?= $clientinho["bairro"]?> /> <br><br>
		Telefone <input type="text" name="telefone" value=<?= $clientinho["telefone"]?> /> <br><br>
		Celular <input type="text" name="celular" value=<?= $clientinho["celular"]?> /> <br><br>
		E-mail <input type="text" name="email" value=<?= $clientinho["email"]?> /> <br><br>
		Quantidade de contas <input type="text" name="qntC" value=<?= $clientinho["quantidadecontas"]?> /> <br><br>
		<input type="submit" value="Editar dados"/>

	</form>
	</body
</html>

<?php }?>