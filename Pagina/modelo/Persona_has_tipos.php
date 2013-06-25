<?php
	class Persona_has_tipos{
	
		private $idPersonas_has_tipos;
		private $idPersonas;
		private $idTipos;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Persona_has_tipos($idPersonas_has_tipos,$idPersonas,$idTipos,$estado,$fecha,$idUsuarios){
			$this->idPersonas_has_tipos=$idPersonas_has_tipos;
			$this->idPersonas=$idPersonas;
			$this->idTipos=$idTipos;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdPersonas_has_tipos(){
			return $this->idPersonas_has_tipos;
		}
		
		public function setIdPersonas_has_tipos($value){
			$this->idPersonas_has_tipos=$value;
		}
		
		public function getIdPersonas(){
			return $this->idPersonas;
		}
		
		public function setIdPersonas($value){
			$this->idPersonas=$value;
		}
		
		public function getIdTipos(){
			return $this->idTipos;
		}
		
		public function setIdTipos($value){
			$this->idTipos=$value;
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