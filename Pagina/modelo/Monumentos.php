<?php
	class Monumentos{
	
		private $idMonumentos;
		private $nombre;
		private $idDirecciones;
		private $foto_monumento;
		private $foto_mapa;
		private $estado;
		private $fecha;
		private $idUsuarios;
		
		public function Monumentos($idMonumentos,$nombre,$idDirecciones,$foto_monumentos,$foto_mapa,$estado,$fecha,$idUsuarios){
			$this->idMonumentos=$idMonumentos;
			$this->nombre=$nombre;
			$this->idDirecciones=$idDirecciones;
			$this->foto_munumentos=$foto_monumentos;
			$this->foto_mapa=$foto_mapa;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdMonumentos(){
			return $this->idMonumentos;
		}
		
		public function setIdMonumentos($value){
			$this->idMonumentos=$value;
		}
		
		public function getNombre(){
			return $this->nombre;
		}
		
		public function setNombre($value){
			$this->nombre=$value;
		}
		
		public function getIdDirecciones(){
			return $this->idDirecciones;
		}
		
		public function setIdDirecciones($value){
			$this->idDirecciones=$value;
		}
		
		public function getFoto_monumentos(){
			return $this->foto_monumentos;
		}
		
		public function setFoto_monumentos($value){
			$this->foto_monumentos=$value;
		}
		
		public function getFoto_mapa(){
			return $this->foto_mapa;
		}
		
		public function setFoto_mapa($value){
			$this->foto_mapa=$value;
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