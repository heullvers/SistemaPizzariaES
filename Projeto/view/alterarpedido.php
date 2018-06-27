<?php

    include_once("../model/Pedido.php");
    include_once("../persistence/Connection.php");
	include_once("../persistence/PedidoDAO.php");
	
	if(!isset($_GET['idpedido']))
		echo "<script>alert('Codigo invalido.'); location.href=..\index.html;</script>";
	else{
		
		$idpedido = intval($_GET['idpedido']);
		$conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
    	$conexao->conectar();

		$pedidodao = new PedidoDAO();
		$pedido = $pedidodao->consultarUM($idpedido, $conexao->getLink());

?>


<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="../css/estilo.css">
	</head>

	<body>
	<section>
	<form action="..\controller\C_alterarpedido.php" method="POST">
	<h2>EDIÇÃO DE PEDIDOS</h2>
	<fieldset>
        <legend>Campos com * são obrigatórios</legend>

			<input type="hidden" name="idpedido" value="<?= $pedido["idpedido"]?>"></input>

			ID Funcionario <br> <input type="number" name="idfuncionario" maxlength="12" value="<?= $pedido["idfuncionario"]?>" placeholder="Informe o ID do funcionário" autofocus required/> <br><br>
			ID Pizza  <br> <input type="number" name="idpizza"  maxlength="12" value="<?= $pedido["idpizza"]?>" required/> <br><br>
			ID Bebida <br> <input type="number" name="idbebida" maxlength="12" value="<?= $pedido["idbebida"]?>" required/> <br><br>
            ID Conta  <br> <input type="number" name="idconta"  maxlength="12" value="<?= $pedido["idconta"]?>" required/> <br><br>

            Observações<br> <input type="text" name="observacoes" value="<?= $pedido["observacoes"]?>"><br><br>
            Mesa *<br> <input type="number" maxlength="3" name="mesa" value="<?= $pedido["mesa"]?>" required><br><br>
                            
            <?php $entrega = $pedido["tipopedido"]; ?>
            Entrega *<input type="radio" name="entrega" value="Entrega" <?php echo ($entrega =="Sim") ? "checked" : null;?> > Sim
					<input type="radio" name="entrega" value="Local" <?php echo ($entrega =="Não") ? "checked" : null;?> checked> Não <br><br>
                            
            <br>
            <input type="submit" value="Salvar">
	</fieldset>

	</form>
	</section>
	</body>
</html>

<?php }?>