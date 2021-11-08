<?php 
	/**
	 * 
	 */
	class ClaseCliente{
		private $idcliente;
		private $nombre;
		private $apellido;
		private $telefono;
		private $direccion;
		
		function __construct($idcliente,$nombre,$apellido,$telefono,$direccion){
			# code...
			$this->idcliente=$idcliente;
			$this->nombre=$nombre;
			$this->apellido=$apellido;
			$this->telefono=$telefono;
			$this->direccion=$direccion;
		}

		function getIdCliente(){
			return $this->idcliente;
		}
		
		function getNombre(){
			return $this->nombre;
		}

		function getApellido(){
			return $this->apellido;
		}

		function getTelefono(){
			return $this->telefono;
		}

		function getDireccion(){
			return $this->direccion;
		}

	}
?>