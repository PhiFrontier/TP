<?php
	class Paginas{
	
		private $idPaginas;
		private $idPaginas_has_idiomas;
		private $variable;
		private $texto;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Paginas($idPaginas,$idPaginas_has_idiomas,$variable,$texto,$estado,$fecha,$idUsuarios){
			$this->idPaginas=$idPaginas;
			$this->idPaginas_has_idiomas=$idPaginas_has_idiomas;
			$this->variable=$variable;
			$this->texto=$texto;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdPaginas(){
			return $this->idPaginas;
		}
		
		public function setIdPaginas($value){
			$this->idPaginas=$value;
		}
		
		public function getIdPaginas_has_idiomas(){
			return $this->dPaginas_has_idiomas;
		}
		
		public function setIdPaginas_has_idiomas($value){
			$this->idPaginas_has_idiomas=$value;
		}
		
		public function getVariable(){
			return $this->variable;
		}
		
		public function setVariable($value){
			$this->variable=$value;
		}
		
		public function getTexto(){
			return $this->texto;
		}
		
		public function setTexto($value){
			$this->texto=$value;
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