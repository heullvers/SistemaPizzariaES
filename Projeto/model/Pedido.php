<?php


    class Pedido {

    private $idPedido;
    private $idFuncionario;
    private $idPizza;
    private $idBebida;
    private $idConta;
    private $observacoes;
    private $mesa;
    private $tipoPedido;
    private $statusPedido;
    private $precoTotal;

    function __construct($idPedido, $idFuncionario, $idPizza, $idBebida, $idConta, $observacoes, $mesa, $tipoPedido, $precoTotal){

        $this->idPedido = $idPedido;
        $this->idFuncionario = $idFuncionario;
        $this->idPizza = $idPizza;
        $this->idBebida = $idBebida;
        $this->idConta = $idConta;
        $this->observacoes = $observacoes;
        $this->mesa = $mesa;
        $this->tipoPedido = $tipoPedido;
        $this->statusPedido = True; //em andamento
        $this->precoTotal = $precoTotal;
    }
}


?>