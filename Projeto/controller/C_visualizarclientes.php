

<?php

    include_once("../model/Cliente.php");
    include_once("../persistence/Connection.php");
    include_once("../persistence/ClienteDAO.php");

    session_start();



    $conexao = new Connection("localhost", "5432", "postgres", "hubuntuh", "dbPizzaria");
    $conexao->conectar();

    $clientedao = new ClienteDAO();
    $resultado = $clientedao->consultar($conexao->getLink());
    //$linha = pg_fetch_row($resultado);
    //echo $resultado;       

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Irineu 2</title>
    <link rel="stylesheet" type="text/css" />
</head>
<body>
    <h2>VISUALIZAÇÃO DE CLIENTES</h2>

    <?php
     if(isset($_SESSION['msg'])){
         echo $_SESSION['msg'];
         unset ($_SESSION['msg']);
     }

    
    ?>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Data de nascimento</td>
            <td>CPF</td>
            <td>Sexo</td>
            <td>Cidade</td>
            <td>Endereco</td>
            <td>Bairro</td>
            <td>Telefone</td>
            <td>Celular</td>
            <td>E-mail</td>
            <td>Quantidade de contas</td>
            <td>Atendimento especial</td>
            <td>Ação</td>
        </tr>

        <?php while ($row = pg_fetch_array($resultado)) { ?>

        <tr>
            <td><?php echo $row["idcliente"];?></td>
            <td><?php echo $row["nome"];?></td>
            <td><?php echo date("d/m/Y", strtotime($row["nascimento"]));?></td>
            <td><?php echo $row["cpf"];?></td>
            <td><?php echo $row["sexo"];?></td>
            <td><?php echo $row["cidade"];?></td>
            <td><?php echo $row["endereco"];?></td>
            <td><?php echo $row["bairro"];?></td>
            <td><?php echo $row["telefone"];?></td>
            <td><?php echo $row["celular"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["quantidadecontas"];?></td>
            <td><?php echo $row["atendimentoespecial"];?></td>
            <td><a href="..\view\alterarcliente.php?idcliente=<?php echo $row["idcliente"];?>">Editar</a> |

            <a href="javascript: if(confirm('Tem certeza que deseja deletar o cliente <?php echo $row["nome"];?>?
            '))location.href='C_excluircliente.php?idcliente=<?php echo $row["idcliente"];?>'"> Excluir </a></td>
        </tr>
        <?php }?>
    </table>



</body>
</html>




