<?php
	class Pagina_has_idiomas{
	
		private $idPagina_has_idiomas;
		private $idIdiomas;
		private $idMOnumentos;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Pagina_has_idiomas($idPagina_has_idiomas,$idIdiomas,$idMonumentos,$estado,$fecha,$idUsuarios){
			$this->idPagina_has_idiomas=$idPagina_has_idiomas;
			$this->idIdiomas=$idIdiomas;
			$this->idMonumentos=$idMonumentos;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdPagina_has_idiomas(){
			return $this->idPagina_has_idiomas;
		}
		
		public function setIdPagina_has_idiomas($value){
			$this->idPagina_has_idiomas=$value;
		}
		
		public function getIdIdiomas(){
			return $this->idIdiomas;
		}
		
		public function setIdIdiomas($value){
			$this->idIdiomas=$value;
		}
		
		public function getIdMonumentos(){
			return $this->idMonumentos;
		}
		
		public function setIdMonumentos($value){
			$this->idMonumentos=$value;
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