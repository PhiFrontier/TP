<?php
	class Comunas{
	
		private $idComunas;
		private $nombre;
		private $idProvincias;
		private $estado;
		private $fecha;
		private $idUsuarios INT
		
		public function Comunas($idComunas,$nombre,$idProvincias,$estado,$fecha,$idUsuarios){
			$this->idComunas=$idComunas;
			$this->nombre=$nombre;
			$this->idProvincias=$idProvincias;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdComunas(){
			return $this->idComunas;
		}
		
		public function setIdComunas($value){
			$this->idComunas=$value;
		}
		
		public function getNombre(){
			return $this->nombre;
		}
		
		public function setNombre($value){
			$this->nombre=$value;
		}
		
		public function getIdProvincias(){
			return $this->idProvincias;
		}
		
		public function setIdProvincias($value){
			$this->idProvincias=$value;
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