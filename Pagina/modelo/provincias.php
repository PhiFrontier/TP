<?php
	class Provincias{
	
		private $idProvincias;
		private $nombre;
		private $idRegiones;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Provincias($idProvincias,$nombre,$idRegiones,$estado,$fecha,$idUsuarios){
			$this->idProvincias=$idProvincias;
			$this->nombre=$nombre;
			$this->idRegiones=$idRegiones;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdProvincias(){
			return $this->idProvincias;
		}
		
		public function setIdProvincias($value){
			$this->idProvincias=$value;
		}
		
		public function getNombre(){
			return $this->nombre;
		}
		
		public function setNombre($value){
			$this->nombre=$value;
		}
		
		public function getIdRegiones(){
			return $this->idRegiones;
		}
		
		public function setIdRegiones($value){
			$this->idRegiones=$value;
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