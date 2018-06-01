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

        public function alterar($link){

        $clienteid = $_GET['idcliente'];
        

        $query = "UPDATE cliente set nome='". $cliente->getNome()."', nascimento='". $cliente->getNascimento()."',
         cpf=". $cliente->getCpf()."', cidade='". $cliente->getCidade()."', endereco='". $cliente->getEndereco()."'
        , bairro='". $cliente->getBairro()."', telefone='". $cliente->getTelefone()."', celular='". $cliente->getCelular()."',
        email= '". $cliente->getEmail()."', quantidadecontas=". $cliente->getQntContas().",
         sexo='". $cliente->getSexo()."', atendimentoespecial='". $cliente->getAtendimentoEspecial()."' WHERE idcliente = '". $clienteid."'";
   
        if(!pg_query($link, $query)){

            die("ERRO! Os dados não foram salvos.");
        }

        echo "Os dados foram salvos";
                
    }

    public function consultarUM($link){

        $clienteid = $_GET['idcliente'];
        $query = "SELECT FROM cliente WHERE idcliente = '". $clienteid."'";
        $result =  pg_query($link, $query);
        $row = pg_fetch_row($result);
        return $row;

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
