<?php 
	/**
	 * 
	 */
	class ClaseEmpleado{
		private $idempleado;
		private $imagen;
		private $nombre;
		private $apellido;
		private $estado_civil;
		private $nit;
		private $dui;
		private $salario;
		private $direccion;
		private $genero;
		private $fechanaci;
		private $correo;
		private $telefono;
		private $idfarmacia;
		private $idcargo;

		private $nombreCargo;
		private $codigoCargo;
		
		function __construct($idempleado,$imagen,$nombre,$apellido,$estado_civil,$nit,$dui,$salario,$direccion,$genero,$fechanaci,$correo,$telefono,$idfarmacia,$idcargo){
			# code...
			$this->idempleado=$idempleado;
			$this->imagen=$imagen;
			$this->nombre=$nombre;
			$this->apellido=$apellido;
			$this->estado_civil=$estado_civil;
			$this->nit=$nit;
			$this->dui=$dui;
			$this->salario=$salario;
			$this->direccion=$direccion;
			$this->genero=$genero;
			$this->fechanaci=$fechanaci;
			$this->correo=$correo;
			$this->telefono=$telefono;
			$this->idfarmacia=$idfarmacia;
			$this->idcargo=$idcargo;
		}

		function getIdEmpleado(){
			return $this->idempleado;
		}
		function getImagen(){
			return $this->imagen;
		}
		function getNombre(){
			return $this->nombre;
		}
		function getApellido(){
			return $this->apellido;
		}
		function getEstadoCivil(){
			return $this->estado_civil;
		}
		function getNit(){
			return $this->nit;
		}
		function getDui(){
			return $this->dui;
		}
		function getSalario(){
			return $this->salario;
		}
		function getDireccion(){
			return $this->direccion;
		}
		function getGenero(){
			return $this->genero;
		}
		function getFechaNaci(){
			return $this->fechanaci;
		}
		function getCorreo(){
			return $this->correo;
		}
		function getTelefono(){
			return $this->telefono;
		}
		function getIdFarmacia(){
			return $this->idfarmacia;
		}
		function getIdCargo(){
			return $this->idcargo;
		}


		function setNombreCargo($nombrec){
			$this->nombreCargo=$nombrec;
		}
		function setCodigoCargo($codigo){
			$this->codigoCargo=$codigo;
		}
		function getNombreCargo(){
			return $this->nombreCargo;
		}
		function getCodigoCargo(){
			return $this->codigoCargo;
		}

	}
?>