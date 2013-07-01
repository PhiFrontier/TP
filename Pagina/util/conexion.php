<?php

class Conexion{
	private $server = "localhost";
	private $username= "root";
	private $password = "";
	private $dbname= "proyecto";
	
	private $link;
	
	public function conectar(){
		
			$this->link = mysql_connect($this->server,$this->username,$this->password) or die("Error: MYSQL_CONNECT :". mysql_error());
			 mysql_select_db($this->dbname,$this->link) or die("Error: MYSQL_SELECT_DB :".mysql_error());  
	}
	
	public function desconectar(){
		if(!isset($this->link)){
			mysql_close($link);
	}
	}
	
	public function query($sql){
		$datos = mysql_query($sql) or die ("Error: MYSQL_QUERY: ".mysql_error());
		return $datos;
		
	}
	
	
}

?>