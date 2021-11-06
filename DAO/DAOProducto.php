<?php 
	require_once ("../conexion/DB_mysql.php");
	require_once ("../clases/ClaseProducto.php");
    
	/**
	 * 
	 */
	class DAOProducto{

		var $Conexion_ID;
    	var $Errno=0;
    	var $Error="";
		
		function __construct(){
			# code...
			$this->Conexion_ID=new DB_mysql();
    		$this->Conexion_ID=$this->Conexion_ID->getConexion();
		}

		function consultaAll(){
            return $this->consulta("SELECT a.idproducto as idproducto, a.codigo as codigo, a.foto as foto, a.nombre as nombre,
a.descripcion as descripcion, a.tipo as tipo, a.estado as estado, a.cantidad as cantidad,
a.unidades as unidades, a.precioventa as precioventa, a.porganancia as porganancia,
a.idcategoria as idcategoria, a.idmarca as idmarca, b.nombre as nombrec, c.nombre as nombrem
 FROM producto as a INNER JOIN categoria as b ON a.idcategoria = b.idcategoria 
INNER JOIN marca as c ON a.idmarca = c.idmarca");
        }

		function consulta($sql=""){
			# code...
        	if ($sql=="") {
       			 $this->Error="No ha especificado una consulta";
            	return 0;
        	}

        	$result=$this->Conexion_ID->query($sql);
        	$listaproducto=array();

        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
               		# code...
                	$clasepro=new ClaseProducto($fila->idproducto,$fila->codigo,$fila->foto,$fila->nombre,$fila->descripcion,$fila->tipo,$fila->estado,$fila->cantidad,$fila->unidades,$fila->precioventa,$fila->porganancia,$fila->idcategoria,$fila->idmarca);
                	$clasepro->setNombreCategoria($fila->nombrec);
                    $clasepro->setNombreMarca($fila->nombrem);
                	$listaproducto[]=$clasepro;
            	}
        	}
        	if (!$result) {
            	# code...
            	$this->Errno=mysqli_connect_errno();
            	$this->Error=mysqli_connect_error();
        	}

        	return $listaproducto;
   		}

   		function insertar(ClaseProducto $obj){
        	if (!($obj instanceof ClaseProducto)) {
           		# code...
            	$this->Error="Error de instaciado";
            	return 0;
       		}
        	$this->Conexion_ID->autocommit(false);
        	$result=$this->Conexion_ID->query("insert into producto 
        	values ('".$obj->getIdProducto()."','".$obj->getCodigo()."','".$obj->getFoto()."','".$obj->getNombre()."','".$obj->getDescripcion()."','".$obj->getTipo()."','".$obj->getEstado()."','".$obj->getCantidad()."','".$obj->getUnidades()."','".$obj->getPrecioventa()."','".$obj->getPorganancia()."','".$obj->getIdCategoria()."','".$obj->getIdMarca()."')");

        	if (!$result) {
            	# code...
            	$this->Errno=mysqli_connect_errno();
            	$this->Error=mysqli_connect_error();
            	$this->Conexion_ID->rollback();/*si algo esta mal los datos no se insertaran */
            	return 0;
        	}else{
            	$this->Conexion_ID->commit();/*si todo esta bien se inserta los datos */
            	return 1;
        	}
    	}

    	function actualizar(ClaseProducto $obj){
            if (!($obj instanceof ClaseProducto)) {
                # code...
                $this->Error="Error de instaciado";
                return 0;
            }
            $this->Conexion_ID->autocommit(false);
            $result=$this->Conexion_ID->query("update producto set codigo='".$obj->getCodigo()."', foto='".$obj->getFoto()."', nombre='".$obj->getNombre()."', descripcion='".$obj->getDescripcion()."', tipo='".$obj->getTipo()."', estado='".$obj->getEstado()."', cantidad='".$obj->getCantidad()."', unidades='".$obj->getUnidades()."', precioventa='".$obj->getPrecioventa()."', porganancia='".$obj->getPorganancia()."', idcategoria='".$obj->getIdCategoria()."', idmarca='".$obj->getIdMarca()."'  where idproducto='".$obj->getIdProducto()."'");

            if (!$result) {
                # code...
                $this->Errno=mysqli_connect_errno();
                $this->Error=mysqli_connect_error();
                $this->Conexion_ID->rollback();/*si algo esta mal los datos no se insertaran */
                return 0;
            }else{
                $this->Conexion_ID->commit();/*si todo esta bien se inserta los datos */
                return 1;
            }
        }

        function eliminar($id){
            $this->Conexion_ID->autocommit(false);
            $result=$this->Conexion_ID->query(" delete from producto where idproducto='".$id."'");

            if (!$result) {
                # code...
                $this->Errno=mysqli_connect_errno();
                $this->Error=mysqli_connect_error();
                $this->Conexion_ID->rollback();/*si algo esta mal los datos no se insertaran */
                return 0;
            }else{
                $this->Conexion_ID->commit();/*si todo esta bien se inserta los datos */
                return 1;
            }
        }

        function consultaIndividual($id){
        	if ($id=="") {
            	# code...
        		$this->Error="No ha especificado una consulta SQL";
            	return 0;
        	}

       		$result=$this->Conexion_ID->query("SELECT a.idproducto as idproducto, a.codigo as codigo, a.foto as foto, a.nombre as nombre,
a.descripcion as descripcion, a.tipo as tipo, a.estado as estado, a.cantidad as cantidad,
a.unidades as unidades, a.precioventa as precioventa, a.porganancia as porganancia,
a.idcategoria as idcategoria, a.idmarca as idmarca, b.nombre as nombrec, c.nombre as nombrem
 FROM producto as a INNER JOIN categoria as b ON a.idcategoria = b.idcategoria 
INNER JOIN marca as c ON a.idmarca = c.idmarca where idproducto='$id'");

        	$ObjE=null;
        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
                	# code...
                	$Ob=new ClaseProducto($fila->idproducto,$fila->codigo,$fila->foto,$fila->nombre,$fila->descripcion,$fila->tipo,$fila->estado,$fila->cantidad,$fila->unidades,$fila->precioventa,$fila->porganancia,$fila->idcategoria,$fila->idmarca);
                    $Ob->setNombreCategoria($fila->nombrec);
                    $Ob->setNombreMarca($fila->nombrem);
                    $ObjE=$Ob;
            	}
        	}
        	///////////////////////////
        	if (!$result) {
           		# code...
            	$this->Errno=mysqli_connect_errno();
            	$this->Error=mysqli_connect_error();
        	}
        	return $ObjE;
    	}

        function consultaIndividualCodigo($id){
            if ($id=="") {
                # code...
                $this->Error="No ha especificado una consulta SQL";
                return 0;
            }

            $result=$this->Conexion_ID->query("SELECT * FROM producto where codigo='$id'");

            $ObjE=null;

            if ($result) {
                # code...
                while ($fila=$result->fetch_object()) {
                    # code...
                    $ObjE=new ClaseProducto($fila->idproducto,$fila->idcategoria,$fila->nombre,$fila->codigo,$fila->cantidad,$fila->costo);

                }
            }
            ///////////////////////////
            if (!$result) {
                # code...
                $this->Errno=mysqli_connect_errno();
                $this->Error=mysqli_connect_error();
            }
            return $ObjE;
        }
        function inactivar($id,$dato){
            $this->Conexion_ID->autocommit(false);
            $result=$this->Conexion_ID->query("update producto set estado='".$dato."'  where idproducto='".$id."'");

            if (!$result) {
                # code...
                $this->Errno=mysqli_connect_errno();
                $this->Error=mysqli_connect_error();
                $this->Conexion_ID->rollback();/*si algo esta mal los datos no se insertaran */
                return 0;
            }else{
                $this->Conexion_ID->commit();/*si todo esta bien se inserta los datos */
                return 1;
            }
        }
        
	}


    

?>