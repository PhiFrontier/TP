<?php
	class Telefonos{
	
		private $idTelefonos;
		private $telefono;
		private $codigo_area;
		private $idPersonas_has_tipos;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Telefonos($idTelefonos,$telefono,$codigo_area,$idPersonas_has_tipos,$estado,$fecha,$idUsuarios){
			$this->idTelefonos=$idTelefonos;
			$this->telefono=$telefono;
			$this->codigo_area=$codigo_area;
			$this->idPersonas_has_tipos=$idPersonas_has_tipos;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdTelefonos(){
			return $this->idtelefonos;
		}
		
		public function setIdTelefonos($value){
			$this->idtelefonos=$value;
		}
		
		public function getTelefono(){
			return $this->Telefono;
		}
		
		public function setTelefono($value){
			$this->telefono=$value;
		}
		
		public function getCodigo_area(){
			return $this->codigo_area;
		}
		
		public function setCodigo_area($value){
			$this->codigo_area=$value;
		}
		
		public function getIdPersonas_has_tipos(){
			return $this->idPersonas_has_tipos;
		}
		
		public function setIdPersonas_has_tipos($value){
			$this->idPersonas_has_tipos=$value;
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