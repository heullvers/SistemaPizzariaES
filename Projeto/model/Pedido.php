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

    function __construct($idPedido, $idFuncionario, $idPizza, $idBebida, $observacoes, $mesa, $tipoPedido, $precoTotal, $idConta){

        $this->idPedido = $idPedido;
        $this->idFuncionario = $idFuncionario;
        $this->idPizza = $idPizza;
        $this->idBebida = $idBebida;
        $this->observacoes = $observacoes;
        $this->mesa = $mesa;
        $this->tipoPedido = $tipoPedido;
        $this->statusPedido = True; //em andamento
        $this->precoTotal = $precoTotal;
        $this->idConta = $idConta;
        
    }

    public function getidPedido(){
        return $this->idPedido;
    }

    public function setidPedido($vidpedido){
        $this->idpedido = $vidpedido;
    }

    public function getidFuncionario(){
        return $this->idFuncionario;
    }

    public function setidFuncionario($vidfuncionario){
        $this->idFuncionario = $vidfuncionario;
    }

    public function getidPizza(){
        return $this->idPizza;
    }

    public function setidPizza($vidPizza){
        $this->idPizza = $vidPizza;
    }

    public function getidBebida(){
        return $this->idBebida;
    }

    public function setidBebida($vidBebida){
        $this->idBebida = $vidBebida;
    }

    public function getidConta(){
        return $this->idConta;
    }

    public function setidConta($vidConta){
        $this->idConta = $vidConta;
    }

    public function getObservacoes(){
        return $this->observacoes;
    }

    public function setObservacoes($vObservacoes){
        $this->observacoes = $vObservacoes;
    }

    public function getMesa(){
        return $this->mesa;
    }

    public function setMesa($vMesa){
        $this->mesa = $vMesa;
    }

    public function gettipoPedido(){
        return $this->tipoPedido;
    }

    public function settipoPedido($vtipoPedido){
        $this->tipoPedido = $vtipoPedido;
    }

    public function getstatusPedido(){
        return $this->statusPedido;
    }

    public function setstatusPedido($vstatusPedido){
        $this->statusPedido = $vstatusPedido;
    }

    public function getprecoTotal(){
        return $this->precoTotal;
    }

    public function setprecoTotal($vprecoTotal){
        $this->precoTotal = $vprecoTotal;
    }

    


}


?>