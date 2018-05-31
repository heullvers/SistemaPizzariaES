<?php
include 'Pessoa.php';

class Cliente extends Pessoa{

    private $idCliente;
    private $qntContas;
    private $atendimentoEspecial;

    function __construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, 
    $celular, $email, $sexo, $idCliente, $atendimentoEspecial){

        parent::__construct($nome, $nascimento, $cpf, $cidade, $endereco, $bairro, $telefone, $celular, $email, $sexo);
        $this->idCliente = $idCliente;
        $this->qntContas = 0;
        $this->atendimentoEspecial = $atendimentoEspecial;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($vnome){
        $this->nome = $vnome;
    }

    public function getNascimento(){
        return $this->nascimento;
    }

    public function setNascimento($vnascimento){
        $this->nascimento = $vnascimento;
    }

    public function getCPF(){
        return $this->cpf;
    }

    public function setCPF($vcpf){
        $this->cpf = $vcpf;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($vcidade){
        $this->cidade = $vcidade;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($vendereco){
        $this->endereco = $vendereco;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($vbairro){
        $this->bairro = $vbairro;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($vtelefone){
        $this->telefone = $vtelefone;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setCelular($vcelular){
        $this->celular = $vcelular;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($vnome){
        $this->email = $vemail;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($vsexo){
        $this->sexo = $vsexo;
    }

    public function getIdCliente(){
        return $this->nome;
    }

    public function setIdCliente($vidcliente){
        $this->idCliente = $vidcliente;
    }

    public function getQntContas(){
        return $this->qntContas;
    }

    public function setQntContas($vqntcontas){
        $this->qntContas = $vqntcontas;
    }

    public function getAtendimentoEspecial(){
        return $this->atendimentoEspecial;
    }

    public function setAtendimentoEspecial($vatendimentoespecial){
        $this->atendimentoEspecial = $vatendimentoespecial;
    }

    /*
    public function imprimir(){
        echo $this->nome;
        echo $this->nascimento;
        echo $this->cpf;
        echo $this->cidade;
        echo $this->endereco;
        echo $this->bairro;
        echo $this->telefone;
        echo $this->celular;
        echo $this->email;
        echo $this->sexo;
        echo $this->qntContas;
        echo $this->atendimentoEspecial;

    }
    */
    
}





?>