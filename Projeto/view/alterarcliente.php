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
	<link rel="stylesheet" href="../css/estilo.css">
	</head>

	<body>
	<section>
	<form action="..\controller\C_alterarcliente.php" method="POST">
	<h2>EDIÇÃO DE CLIENTES</h2>
	<fieldset>
        <legend>Campos com * são obrigatórios</legend>

			<input type="hidden" name="idcli" value="<?= $clientinho["idcliente"]?>"></input>

			Nome <br> <input type="text" name="nome" value="<?= $clientinho["nome"]?>"" placeholder="Informe o nome do cliente" autofocus required/> <br><br>
			Data de nascimento <br> <input type="text" name="datanascimento" value="<?= $clientinho["nascimento"]?>" required/> <br><br>
			CPF <br> <input type="text" name="cpf" value="<?= $clientinho["cpf"]?>" required/> <br><br>


			<?php $sexo = $clientinho["sexo"]; ?>
			<?php $at = $clientinho["atendimentoespecial"]; ?>

			Sexo <input type="radio" name="sexo" value="Masculino" <?php echo ($sexo =="Masculino") ? "checked" : null;?> /> Masculino
			<input type="radio" name="sexo" value="Feminino" <?php  echo ($sexo =="Feminino") ? "checked" : null;?> /> Feminino 
			<br><br>
			Atendimento especial <input type="radio" name="atendimentoespecial" 
			value="Sim" <?php echo ($at =="Sim") ? "checked" : null;?>/> Sim
			<input type="radio" name="atendimentoespecial" value="Não" <?php echo ($at =="Não") ? "checked" : null;?>/> Não <br><br>


			Cidade <br> <input type="text" name="cidade" value="<?= $clientinho["cidade"]?>" required/> <br><br>
			Endereco <br> <input type="text" name="endereco" value="<?= $clientinho["endereco"]?>" required/> <br><br>
			Bairro <br> <input type="text" name="bairro" value="<?= $clientinho["bairro"]?>" required/> <br><br>
			Telefone <br> <input type="text" name="telefone" value="<?= $clientinho["telefone"]?>" /> <br><br>
			Celular <br> <input type="text" name="celular" value="<?= $clientinho["celular"]?>" /> <br><br>
			E-mail <br> <input type="text" name="email" value="<?= $clientinho["email"]?>" /> <br><br>
			Quantidade de contas <br> <input type="text" name="qntC" value="<?= $clientinho["quantidadecontas"]?>" /> <br><br>
			<input type="submit" value="Editar dados"/>
	</fieldset>

	</form>
	</section>
	</body>
</html>

<?php }?>