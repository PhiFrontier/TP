<?php
	class Visitas{
	
		private $idVisitas;
		private $idEmpresas;
		private $idMonumentos;
		private $idPersonas_has_tipos;
		private $tipo_visita;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Visitas($idVisitas,$idEmpresas,$idMonumentos,$idPersonas_has_tipos,$tipo_visita,$estado,$fecha,$idUsuarios){
			$this->idVisitas=$idVisitas;
			$this->idEmpresas=$idEmpresas;
			$this->idMonumentos=$idMonumentos;
			$this->idPersonas_has_tipos= $idPersonas_has_tipos;
			$this->tipo_visita=$tipo_visita;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdVisitas(){
			return $this->idVisitas;
		}
		
		public function setIdVisitas($value){
			$this->idVisitas=$value;
		}
		
		public function getIdEmpresas(){
			return $this->idEmpresas;
		}
		
		public function setIdEmpresas($value){
			$this->idEmpresas=$value;
		}
		
		public function getIdMonumentos(){
			return $this->idMonumentos;
		}
		
		public function setIdMonumentos($value){
			$this->idMonumentos=$value;
		}
		
		public function getIdPersonas_has_tipos(){
			return $this->idPersonas_has_tipos;
		}
		
		public function setIdPersonas_has_tipos($value){
			$this->idPersonas_has_tipos=$value;
		}
		
		public function getTipo_visita(){
			return $this->tipo_visita;
		}
		
		public function setTipo_visita($value){
			$this->tipo_visita=$value;
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