<?php


    class Conta {

    private $idConta;
    private $pedidos;
    private $statusConta;
    private $statusPagamento;
    private $precoTotal;

    function __construct($idConta){

        $this->idConta = $idConta;
        $this->pedidos = [];
        $this->statusConta = True; //aberta
        $this->statusPagamento = False; //não paga
        $this->precoTotal = 0;
    }
}

?>