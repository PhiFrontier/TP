<?php
	class Emails{
	
		private $idEmails;
		private $email;
		private $idPersonas_has_tipos;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Emails($idEmails,$email,$idPersonas_has_tipos,$estado,$fecha,$idUsuarios){
			$this->idEmails=$idEmails;
			$this->email=$email;
			$this->idPersonas_has_tipos=$idPersonas_has_tipos;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdEmails(){
			return $this->idEmails;
		}
		
		public function setIdEmails($value){
			$this->idEmails=$value;
		}
		
		public function getEmail(){
			return $this->email;
		}
		
		public function setEmail($value){
			$this->email=$value;
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
		
		public function getIdUsuarios(){
			return $this->idUsuarios;
		}
		
		public function setIdUsuarios($value){
			$this->idUsuarios=$value;
		}
				
	}

?>