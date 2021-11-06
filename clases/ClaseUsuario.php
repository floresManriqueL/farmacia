<?php 
	/**
	 * 
	 */
	class ClaseUsuario{
		private $idusuario;
		private $nombre;
		private $clave;
		private $tipo;
		private $estado;
		private $idempleado;

		private $nombreEmpleado;
		private $apellidoEmpleado;
		private $imagenEmpleado;
		private $correoEmpleado;
		private $duiEmpleado;
		
		function __construct($idusuario,$nombre,$clave,$tipo,$estado,$idempleado){
			# code...
			$this->idusuario=$idusuario;
			$this->nombre=$nombre;
			$this->clave=$clave;
			$this->tipo=$tipo;
			$this->estado=$estado;
			$this->idempleado=$idempleado;
		}

		function getIdUsuario(){
			return $this->idusuario;
		}
		function getNombre(){
			return $this->nombre;
		}
		function getClave(){
			return $this->clave;
		}
		function getTipo(){
			return $this->tipo;
		}
		function getEstado(){
			return $this->estado;
		}
		function getIdEmpleado(){
			return $this->idempleado;
		}

		function setNombreEmpleado($nombrem){
			$this->nombreEmpleado=$nombrem;
		}
		function setApellidoEmpleado($apellidom){
			$this->apellidoEmpleado=$apellidom;
		}
		function setImagenEmpleado($imgem){
			$this->imagenEmpleado=$imgem;
		}
		function setCorreoEmpleado($cor){
			$this->correoEmpleado=$cor;
		}
		function setDuiEmpleado($dui){
			$this->duiEmpleado=$dui;
		}


		function getNombreEmpleado(){
			return $this->nombreEmpleado;
		}
		function getApellidoEmpleado(){
			return $this->apellidoEmpleado;
		}
		function getImagenEmpleado(){
			return $this->imagenEmpleado;
		}
		function getCorreoEmpleado(){
			return $this->correoEmpleado;
		}
		function getduiEmpleado(){
			return $this->duiEmpleado;
		}

	}
?>