<?php
	class Personas{
	
	    private $idPersonas;
        private $rut;
        private $cargo;
        private $nombre;
        private $ape_paterno;
        private $ape_materno;
        private $fecha_nac;
        private $sexo;
        private $estado;
        private $fecha;
		private $idUsuarios; 
		
		public function Personas($idPersonas,$rut,$cargo,$nombre,$ape_paterno,$ape_materno,$fecha_nac,$sexo,$estado,$fecha,$idUsuarios){
			$this->idPersonas=$idPersonas;
			$this->rut=$rut;
			$this->cargo=$cargo;
			$this->nombre=$nombre;
			$this->ape_paterno=$ape_paterno;
			$this->ape_materno=$ape_materno;
			$this->fecha_nac=$fecha_nac;
			$this->sexo=$sexo;
			$this->estado=$estado;
			$this->fecha=$fecha;
			$this->idUsuarios=$idUsuarios;
		}
		
		public function getIdPersonas(){
			return $this->idPersonas;
		}
		
		public function setIdPersonas($value){
			$this->idPersonas=$value;
		}
		
		public function getRut(){
			return $this->rut;
		}
		
		public function setRut($value){
			$this->rut=$value;
		}
		
		public function getCargo(){
			return $this->cargo;
		}
		
		public function setCargo($value){
			$this->cargo=$value;
		}
		
		public function getNombre(){
			return $this->nombre;
		}
		
		public function setNombre($value){
			$this->nombre=$value;
		}
		
		public function getApe_paterno(){
			return $this->ape_paterno;
		}
		
		public function setApe_paterno($value){
			$this->ape_paterno=$value;
		}
		
		public function getApe_materno(){
			return $this->ape_materno;
		}
		
		public function setApe_materno($value){
			$this->ape_materno=$value;
		}
		
		public function getFecha_nac(){
			return $this->fecha_nac;
		}
		
		public function setFecha_nac($value){
			$this->fecha_nac=$value;
		}
		
		public function getSexo(){
			return $this->sexo;
		}
		
		public function setSexo($value){
			$this->sexo=$value;
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