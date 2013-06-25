<?php
	class Preferencias{
	
		private $idPreferencias;
		private $idIdiomas;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Preferencias($idPreferencias,$idIdiomas,$estado,$fecha,$idUsuarios){
			$this->idPreferencias=$idPreferencias;
			$this->idIdiomas=$idIdiomas;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdPreferencias(){
			return $this->idPreferencias;
		}
		
		public function setIdPreferencias($value){
			$this->idPreferencias=$value;
		}
		
		public function getIdIdiomas(){
			return $this->idIdiomas;
		}
		
		public function setIdIdiomas($value){
			$this->idIdiomas=$value;
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