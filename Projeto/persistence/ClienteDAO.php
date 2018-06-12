<?php

include_once("../model/Cliente.php");

    class ClienteDAO{


    public function cadastrar($cliente, $link){

        $query = "INSERT INTO cliente (nome, nascimento, cpf, cidade, endereco, bairro, telefone, 
        celular, email, quantidadecontas, atendimentoespecial, sexo) VALUES ('". $cliente->getNome()."', '". $cliente->getNascimento()."', '". $cliente->getCpf()."',
        '". $cliente->getCidade()."', '". $cliente->getEndereco()."','". $cliente->getBairro()."', '". $cliente->getTelefone()."', '". $cliente->getCelular()."', 
        '". $cliente->getEmail()."',". $cliente->getQntContas().",  '". $cliente->getAtendimentoEspecial()."', '". $cliente->getSexo()."')";
   
        if(!pg_query($link, $query)){

            die("ERRO! Os dados não foram salvos.");
        }

        echo "Os dados foram salvos";
                
    }

    function excluir($link){

        $clienteid = intval($_GET["idcliente"]);
        $query = "DELETE FROM cliente WHERE idcliente=". $clienteid;
        $pg = pg_query($link, $query);
        if(!pg){

            die("ERRO! Cliente nao excluido.");
        }

        if($pg){
            echo 
            "<script>
                location.href= 'C_visualizarclientes.php';
            </script>";
        }
        else{
            echo 
            "<script>
                alert('Não foi possível deletar o usuário');
                location.href= 'C_visualizarclientes.php';
            </script>";
        }
        
    }

        public function alterar($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, $celular, 
        $email, $sexo, $idCliente, $atendimentoEspecial, $qntContas, $link){
    
            /*
        $query = "UPDATE cliente set nome='$nome', nascimento='$nascimento',
         cpf='$cpf', cidade='$cidade', endereco='$endereco'
        , bairro='$bairro', telefone='$telefone', celular='$celular',
        email= '$email', quantidadecontas=$qntContas,
         sexo='$sexo', atendimentoespecial='$atendimentoEspecial' WHERE idcliente = $idCliente";
*/

    $query = "UPDATE cliente set nome='$nome', nascimento='$nascimento', cidade='$cidade', endereco='$endereco',
        bairro='$bairro', telefone='$telefone', celular='$celular', email='$email', sexo='$sexo', 
        atendimentoespecial='$atendimentoEspecial', quantidadecontas='$qntContas', cpf='$cpf' WHERE idcliente = $idCliente";
         $pg = pg_query($link, $query);

         if(pg_affected_rows($pg)){
            $_SESSION['msg'] = "<p style='color:green;'>Cliente editado com sucesso</p>";
            
            header("Location: ..\controller\C_visualizarclientes.php");
            echo "afetei";
    
        }
        else{
            $_SESSION['msg'] = "<p style='color:red;'>Falha ao editar cliente</p>";
            
            header("Location: ..\controller\C_visualizarclientes.php");
        }
         
    }

    public function consultarUM($cod, $link){

        $query = "SELECT * FROM cliente WHERE idcliente = $cod";
        $pg =  pg_query($link, $query);
        if(!$pg){

            die("ERRO! Não foi possível encontrar o cliente.");
        }

        $row = pg_fetch_array($pg);
        return $row;
        
        /*
        if($pg){
            echo 
            "<script>
                location.href= 'C_visualizarclientes.php';
            </script>";
        }
        else{
            echo 
            "<script>
                alert('Não foi possível deletar o usuário');
                location.href= 'C_visualizarclientes.php';
            </script>";
        }
*/
    }




    function consultar($link){
        $query = "SELECT * FROM cliente";
        $result = pg_query($link, $query);
        if(!$result){

            die("ERRO! Não foi possível encontrar o cliente.");
        }

        return $result;
    }


}

?>
