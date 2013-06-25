<?php
	class Regiones{
	
		private $idRegiones;
		private $nombre;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Regiones($idRegiones,$nombre,$estado,$fecha,$idUsuarios){
			$this->idComunas=$idRegiones;
			$this->nombre=$nombre;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdRegiones(){
			return $this->idRegiones;
		}
		
		public function setIdRegiones($value){
			$this->idRegiones=$value;
		}
		
		public function getNombre(){
			return $this->nombre;
		}
		
		public function setNombre($value){
			$this->nombre=$value;
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