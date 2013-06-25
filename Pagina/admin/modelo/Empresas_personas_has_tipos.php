<?php
	class Empresas_personas_has_tipos{
	
		private $idEmpresas_personas_has_tipos;
		private $idEmpresas;
		private $idPersonas_has_tipos;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Empresas_personas_has_tipos($idEmpresas_personas_has_tipos,$idEmpresas,$idPersonas_has_tipos,$estado,$fecha,$idUsuarios){
			$this->idEmpresas_personas_has_tipos=$idEmpresas_personas_has_tipos;
			$this->idEmpresas=$idEmpresas;
			$this->idPersonas_has_tipos=$idPersonas_has_tipos;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdEmpresas_personas_has_tipos(){
			return $this->idEmpresas_personas_has_tipos;
		}
		
		public function setIdEmpresas_personas_has_tipos($value){
			$this->idEmpresas_personas_has_tipos=$value;
		}
		
		public function getIdEmpresas(){
			return $this->idEmpresas;
		}
		
		public function setIdEmpresas($value){
			$this->idEmpresas=$value;
		}
		
		public function getIdPersonas_has_tipos(){
			return $this->idPersonas_has_tipos;
		}
		
		public function setIdPersonas_has_tipos($value){
			$this->idPersonas_has_tipos=$value;
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