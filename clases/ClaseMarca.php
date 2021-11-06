<?php 
	/**
	 * 
	 */
	class ClaseMarca{
		private $idmarca;
		private $codigo;
		private $nombre;
		
		function __construct($idmarca,$codigo,$nombre){
			# code...
			$this->idmarca=$idmarca;
			$this->codigo=$codigo;
			$this->nombre=$nombre;
		}

		function getIdMarca(){
			return $this->idmarca;
		}
		function getCodigo(){
			return $this->codigo;
		}
		function getNombre(){
			return $this->nombre;
		}
	}
?>