<?php
	class Tipos{
	
		private $idTipos;
		private $nombre;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Tipos($idTipos,$nombre,$estado,$fecha,$idUsuarios){
			$this->idTipos=$idTipos;
			$this->nombre=$nombre;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdTipos(){
			return $this->idTipos;
		}
		
		public function setIdTipos($value){
			$this->idTipos=$value;
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