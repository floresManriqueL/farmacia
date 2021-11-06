<?php 
	/**
	 * 
	 */
	class ClaseCategoria{
		private $idcategoria;
		private $codigo;
		private $nombre;
		
		function __construct($idcategoria,$codigo,$nombre){
			# code...
			$this->idcategoria=$idcategoria;
			$this->codigo=$codigo;
			$this->nombre=$nombre;
		}

		function getIdCategoria(){
			return $this->idcategoria;
		}
		function getCodigo(){
			return $this->codigo;
		}
		function getNombre(){
			return $this->nombre;
		}
	}
?>