<?php


    class Pizza {

    private $idPizza;
    private $nome;
    private $preco;

    function __construct($idPizza, $nome, $preco){

        $this->idPizza = idPizza;
        $this->nome = nome;
        $this->preco = preco;
    }
}


?>