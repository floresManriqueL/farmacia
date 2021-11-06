<?php  
	/**
	 * 
	 */
	class ClaseProducto{
		private $idproducto;
		private $codigo;
		private $foto;
		private $nombre;
		private $descripcion;
		private $tipo;
		private $estado;
		private $cantidad;
		private $unidades;
		private $precioventa;
		private $porganancia;
		private $idcategoria;
		private $idmarca;

		private $nombreCategoria;
		private $codigoCategoria;

		private $nombreMarca;
		private $codigoMarca;

		private $id;



		function __construct($idproducto,$codigo,$foto,$nombre,$descripcion,$tipo,$estado,$cantidad,$unidades,$precioventa,$porganancia,$idcategoria,$idmarca){
			# code...
			$this->idproducto=$idproducto;
			$this->codigo=$codigo;
			$this->foto=$foto;
			$this->nombre=$nombre;
			$this->descripcion=$descripcion;
			$this->tipo=$tipo;
			$this->estado=$estado;
			$this->cantidad=$cantidad;
			$this->unidades=$unidades;
			$this->precioventa=$precioventa;
			$this->porganancia=$porganancia;
			$this->idcategoria=$idcategoria;
			$this->idmarca=$idmarca;
		}

		function getIdProducto(){
			return $this->idproducto;
		}
		function getCodigo(){
			return $this->codigo;
		}
		function getFoto(){
			return $this->foto;
		}
		function getNombre(){
			return $this->nombre;
		}
		function getDescripcion(){
			return $this->descripcion;
		}
		function getTipo(){
			return $this->tipo;
		}
		function getEstado(){
			return $this->estado;
		}
		function getCantidad(){
			return $this->cantidad;
		}
		function getUnidades(){
			return $this->unidades;
		}
		function getPrecioventa(){
			return $this->precioventa;
		}
		function getPorganancia(){
			return $this->porganancia;
		}
		function getIdCategoria(){
			return $this->idcategoria;
		}
		function getIdMarca(){
			return $this->idmarca;
		}
		function setNombreCategoria($nombre){
			$this->nombreCategoria=$nombre;
		}
		function setCodigoCategoria($codigo){
			$this->codigoCategoria=$codigo;
		}
		function setNombreMarca($nombre){
			$this->nombreMarca=$nombre;
		}
		function setCodigoMarca($codigo){
			$this->codigoCategoria=$codigo;
		}
		function getNombreCategoria(){
			return $this->nombreCategoria;
		}
		function getNombreMarca(){
			return $this->nombreMarca;
		}
		function setId($id){
			$this->id=$id;
		}
		function getId(){
			return $this->id;
		}
	}
?>