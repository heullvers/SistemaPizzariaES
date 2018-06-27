<?php

    include_once("../model/Pedido.php");
    include_once("../persistence/Connection.php");
    include_once("../persistence/PedidoDAO.php");

    session_start();



    $conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
    $conexao->conectar();

    $pedidodao = new PedidoDAO();
    $resultado = $pedidodao->consultar($conexao->getLink());
       

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Visualizar pedidos</title>
    <link rel="stylesheet" type="text/css" />
</head>
<body>
    <h2>VISUALIZAÇÃO DE PEDIDOS</h2>

    <?php
     if(isset($_SESSION['msg'])){
         echo $_SESSION['msg'];
         unset ($_SESSION['msg']);
     }

    
    ?>

    <a href="../index.html">Voltar</a><br><br>

    <table border="1">
        <tr>
            <td>ID Pedido</td>
            <td>ID Funcionario</td>
            <td>ID Pizza</td>
            <td>ID Bebida</td>
            <td>Observacoes</td>
            <td>Mesa</td>
            <td>Tipo Pedido</td>
            <td>Preco Total</td>
            <td>ID Conta</td>
            <td>Status Pedido</td>
            
            <td>Ação</td>
        </tr>

        <?php while ($row = pg_fetch_array($resultado)) { ?>

        <tr>
            <td><?php echo $row["idpedido"];?></td>
            <td><?php echo $row["idfuncionario"];?></td>
            <td><?php echo $row["idpizza"];?></td>
            <td><?php echo $row["idbebida"];?></td>
            <td><?php echo $row["observacoes"];?></td>
            <td><?php echo $row["mesa"];?></td>
            <td><?php echo $row["tipopedido"];?></td>
            <td><?php echo $row["precototal"];?></td>
            <td><?php echo $row["idconta"];?></td>
            <td><?php echo $row["statuspedido"];?></td>
            
            <td><a href="..\view\alterarpedido.php?idpedido=<?php echo $row["idpedido"];?>">Editar</a> |

            <a href="javascript: if(confirm('Tem certeza que deseja deletar o pedido <?php echo $row["idpedido"];?>?
            '))location.href='C_excluirpedido.php?idpedido=<?php echo $row["idpedido"];?>'"> Excluir </a></td>
        </tr>
        <?php }?>
    </table>



</body>
</html>




