<?php

include_once("../model/Pedido.php");

    class PedidoDAO{

    public function cadastrar($pedido, $link){
        
        $query = "INSERT INTO pedido (idfuncionario, idpizza, idbebida, observacoes, mesa, 
        tipopedido,  precototal, idconta, statuspedido) VALUES (". $pedido->getidFuncionario().", ". $pedido->getidPizza().",
        ". $pedido->getidBebida().",'". $pedido->getObservacoes()."', ". $pedido->getMesa().", '". $pedido->gettipoPedido()."'
        ,". 10.0 .", ". $pedido->getidConta().", '". Andamento."' )";
        
        $pg = pg_query($link, $query);

        if(pg_affected_rows($pg)){
            $_SESSION['msg'] = "<p style='color:green;'>Pedido cadastrado com sucesso</p>";
                
            header("Location: ..\controller\C_visualizarpedidos.php");
        
        }
        else{
                $_SESSION['msg'] = "<p style='color:red;'>Falha ao cadastrar pedido</p>";
                
                header("Location: ..\controller\C_visualizarpedidos.php");
            }
                
    }

    function consultar($link){
        $query = "SELECT * FROM pedido";
        $result = pg_query($link, $query);
        if(!$result){

            die("ERRO! Não foi possível encontrar o pedido.");
        }

        return $result;
    }

    function excluir($link){

        $pedidoid = intval($_GET["idpedido"]);
        $query = "DELETE FROM pedido WHERE idpedido=". $pedidoid;
        echo $query;
        $pg = pg_query($link, $query);

        if(pg_affected_rows($pg)){
            $_SESSION['msg'] = "<p style='color:green;'>Pedido removido com sucesso</p>";
                
            header("Location: ..\controller\C_visualizarpedidos.php");
        
        }
        else{
                $_SESSION['msg'] = "<p style='color:red;'>Falha ao remover pedido</p>";
                
                header("Location: ..\controller\C_visualizarpedidos.php");
            }
        
    }

    public function alterar($idpedido, $idfuncionario, $idpizza, $idbebida, $idconta, $observacoes, $mesa, $entrega, $link){

            
            $query = "UPDATE pedido set idfuncionario=$idfuncionario, idpizza=$idpizza, idbebida=$idbebida, idconta=$idconta,
            observacoes='$observacoes', mesa=$mesa, tipopedido='$entrega' WHERE idpedido = $idpedido";
            $pg = pg_query($link, $query);

            if(pg_affected_rows($pg)){
                $_SESSION['msg'] = "<p style='color:green;'>Pedido editado com sucesso</p>";
                header("Location: ..\controller\C_visualizarpedidos.php");
        
            }
            else{
                $_SESSION['msg'] = "<p style='color:red;'>Falha ao editar pedido</p>";
                
                header("Location: ..\controller\C_visualizarpedidos.php");
            }
        }

    public function consultarUM($cod, $link){

        $query = "SELECT * FROM pedido WHERE idpedido = $cod";
        $pg =  pg_query($link, $query);
        if(!$pg){

            die("ERRO! Não foi possível encontrar o pedido.");
        }

        $row = pg_fetch_array($pg);
        return $row;
        
    }


}

?>