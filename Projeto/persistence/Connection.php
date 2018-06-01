<?php

class Connection{

	var $servidor;
	var $user;
	var $pwd;
	var $bd;
	var $link;
	var $port;

	function __construct($vservidor, $vport, $vuser, $vpwd, $vbd){
	
		$this->servidor = $vservidor;
		$this->port = $vport;
		$this->user = $vuser;
		$this->pwd = $vpwd;
		$this->bd = $vbd;
	}
	
	function conectar(){
		if(!$this->link){
			$con = "host=".$this->servidor." ". "port=".$this->port." "."dbname=".$this->bd." "."user=".$this->user." "."password=".$this->pwd;
			$this->link = pg_connect($con);
			if(!$this->link){
				die("Não foi possivel conectar ao bd");
			}
		}

		return $this->link;
	}
	
	function getLink(){
		return $this->link;
	}
	
	function fechar(){
		mysqli_close($this->link);
	}



}

?>