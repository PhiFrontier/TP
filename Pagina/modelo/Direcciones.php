<?php
	class Direcciones{
	
		private $idDirecciones;
        private $referencia;
		private $calle;
		private $numero;
		private $villa_poblacion_condominio;
		private $piso;
		private $block; 
		private $sector;
		private $idPersona_has_tipos;
		private $idComunas;
		private $estado;
		private $fecha; 
		private $idUsuarios; 
		
		public function Direcciones($idDirecciones,$referencia,$calle,$numero,$villa_poblacion_condominio,$piso,$block,$sector,$idPersona_has_tipos,$idComunas,$estado,$fecha,$idUsuarios){
			
			$this->idDirecciones=$idDirecciones;
			$this->referencia=$referencia;
			$this->calle=$calle;
			$this->numero=$numero;
			$this->villa_poblacion_condominio=$villa_poblacion_condominio;
			$this->piso=$piso;
			$this->block=$block;
			$this->sector=$sector;
			$this->idPersona_has_tipos=$idPersona_has_tipos;
			$this->idComunas=$idComunas;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdDirecciones(){
			return $this->idDirecciones;
		}
		
		public function setIdDirecciones($value){
			$this->idDirecciones=$value;
		}
		
		public function getReferencia(){
			return $this->referencia;
		}
		
		public function setCalle($value){
			$this->calle=$value;
		}
		
		public function getNumero(){
			return $this->numero;
		}
		
		public function setNumero($value){
			$this->numero=$value;
		}
		
		public function getVilla_poblacion_condominio(){
			return $this->villa_poblacion_condominio;
		}
		
		public function setVilla_poblacion_condominio($value){
			$this->villa_poblacion_condominio=$value;
		}
		
		public function getPiso(){
			return $this->piso;
		}
		
		public function setPiso($value){
			$this->Piso=$value;
		}
		
		public function getBlock(){
			return $this->block;
		}
		
		public function setBlock($value){
			$this->block=$value;
		}
		
		public function getSector(){
			return $this->sector;
		}
		
		public function setSector($value){
			$this->sector=$value;
		}
		
		public function getIdPersonas_has_tipos(){
			return $this->idPersonas_has_tipos;
		}
		
		public function setIdPersonas_has_tipos($value){
			$this->idPersonas_has_tipos=$value;
		}
		
		public function getIdComunas(){
			return $this->idComunas;
		}
		
		public function setIdComunas($value){
			$this->idComunas=$value;
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