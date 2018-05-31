<?php


class Pessoa{

    protected $nome;
    protected $nascimento;
    protected $cpf;
    protected $cidade;
    protected $endereco;
    protected $bairro;
    protected $telefone;
    protected $celular;
    protected $email;
    protected $sexo;
 
    function __construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, $celular, $email, $sexo){

        $this->nome = $nome;
        $this->nascimento = $nascimento;
        $this->cpf = $cpf;
        $this->cidade = $cidade;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->email = $email;
        $this->sexo = $sexo;
    }

    

    
    function imprimir(){
        echo "Nome:".$this->nome."<br>
        Nascimento:". $this->nascimento."<br>
        Salario:".$this->cidade;
             
    }	
    
}

//$t = new Pessoa("Heuller", "1998/06/15", "11120699681", "São Gonçalo", "Rua Pern 205", "Santa Rita", "3532412637","35997354331", "heuller555@gmail.com", "M" );
//$t->imprimir();




?>