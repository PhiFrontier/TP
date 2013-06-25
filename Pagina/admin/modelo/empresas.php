<?php
	class Empresas{
	
		private $idEmpresas;
		private $rut;
		private $foto_logo;
		private $idDirecciones;
		private $nombre;
		private $razon_social;
		private $giro;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Empresas($idEmpresas,$rut,$foto_logo,$idDirecciones,$nombre,$razon_social,$giro,$estado,$fecha,$idUsuarios){
			$this->idEmpresas=$idEmpresas;
			$this->rut=$rut;
			$this->foto_logo=$foto_logo;
			$this->idDirecciones=$idDirecciones;
			$this->nombre=$nombre;
			$this->razon_social=$razon_social;
			$this->giro=$giro;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdEmpresas(){
			return $this->idEmpresas;
		}
		
		public function setIdEmpresas($value){
			$this->idEmpresas=$value;
		}
		
		public function getRut(){
			return $this->rut;
		}
		
		public function setRut($value){
			$this->rut=$value;
		}
		
		public function getFoto_logo(){
			return $this->foto_logo;
		}
		
		public function setFoto_logo($value){
			$this->foto_logo=$value;
		}
		
		public function getIdDirecciones(){
			return $this->idDirecciones;
		}
		
		public function setIdDirecciones($value){
			$this->idDirecciones=$value;
		}
		
		public function getNombre(){
			return $this->nombre;
		}
		
		public function setNombre($value){
			$this->nombre=$value;
		}
		
		public function getRazon_social(){
			return $this->razon_social;
		}
		
		public function setRazon_social($value){
			$this->razon_social=$value;
		}
		
		public function getGiro(){
			return $this->giro;
		}
		
		public function setGiro($value){
			$this->giro=$value;
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