<?php
	class Idiomas{
	
		private $idIdiomas;
		private $nombre;
		private $foto_bandera;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Idiomas($idIdiomas,$nombre,$foto_bandera,$estado,$fecha,$idUsuarios){
			$this->idIdiomas=$idIdiomas;
			$this->nombre=$nombre;
			$this->foto_bandera=$foto_bandera;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdIdiomas(){
			return $this->idIdiomas;
		}
		
		public function setIdIdiomas($value){
			$this->idIdiomas=$value;
		}
		
		public function getNombre(){
			return $this->nombre;
		}
		
		public function setNombre($value){
			$this->nombre=$value;
		}
		
		public function getFoto_bandera(){
			return $this->foto_bandera;
		}
		
		public function setFoto_bandera($value){
			$this->foto_bandera=$value;
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