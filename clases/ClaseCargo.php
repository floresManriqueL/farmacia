<?php 
	/**
	 * 
	 */
	class ClaseCargo{
		private $idcargo;
		private $codigo;
		private $nombre;
		
		function __construct($idcargo,$codigo,$nombre){
			# code...
			$this->idcargo=$idcargo;
			$this->codigo=$codigo;
			$this->nombre=$nombre;
		}

		function getIdCargo(){
			return $this->idcargo;
		}
		function getCodigo(){
			return $this->codigo;
		}
		function getNombre(){
			return $this->nombre;
		}
	}
?>