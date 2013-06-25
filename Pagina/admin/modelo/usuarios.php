<?php
	class Usuarios{
	
		private $idUsuarios;
		private $nom_usuario;
		private $password;
		private $idPersonas_has_tipos;
		private $estado;
		private $fecha;
		private $isUsuarios;
		
		public function Usuarios($id,$nom_usuario,$password,$idPersonas_has_tipos,$estado,$fecha,$isUsuarios ){
			$this->id=$id;
			$this->nom_usuario=$nom_usuario;
			$this->password=$password;
			$this->idPersonas_has_tipos=$idPersonas_has_tipos;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->isUsuarios=$isUsuarios;
			
		}
		
		public function getIdUsuarios(){
			return $this->idUsuarios;
		}
		
		public function setIdUsuarios($value){
			$this->idUsuarios=$value;
		}
		
		public function getNom_usuario(){
			return $this->nom_usuario;
		}
		
		public function setNom_usuario($value){
			$this->nom_usuario=$value;
		}
		
		public function getPassword(){
			return $this->password;
		}
		
		public function setPassword($value){
			$this->password=$value;
		}
		
		public function getIdPersonas_has_tipos(){
			return $this->idPersonas_has_tipos;
		}
		
		public function setIdPersonas_has_tipos($value){
			$this->idPersonas_has_tipos=$value;
		}
		
		public function getEstado(){
			return $this->estado;
		}
		
		public function setEstado($value){
			$this->estado=$value;
		}		
		
		public function getFecha(){
			return $this->fecha;
		}
		
		public function setFecha($value){
			$this->fecha=$value;
		}
	}

?>