<?php 
	require_once ("../conexion/DB_mysql.php");
	require_once ("../clases/ClaseCategoria.php");
	/**
	 * 
	 */
	class DAOCategoria{

		var $Conexion_ID;
    	var $Errno=0;
    	var $Error="";
		
		function __construct(){
			# code...
			$this->Conexion_ID=new DB_mysql();
    		$this->Conexion_ID=$this->Conexion_ID->getConexion();
		}

		function consultaAll(){
            return $this->consulta("select * from categoria");
        }

		function consulta($sql=""){
			# code...
        	if ($sql=="") {
       			 $this->Error="No ha especificado una consulta";
            	return 0;
        	}

        	$result=$this->Conexion_ID->query($sql);
        	$listacategoria=array();

        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
               		# code...
                	$listacategoria[]=new ClaseCategoria($fila->idcategoria,$fila->codigo,$fila->nombre);
            	}
        	}
        	if (!$result) {
            	# code...
            	$this->Errno=mysqli_connect_errno();
            	$this->Error=mysqli_connect_error();
        	}

        	return $listacategoria;
   		}

   		function insertar(ClaseCategoria $obj){
        	if (!($obj instanceof ClaseCategoria)) {
           		# code...
            	$this->Error="Error de instaciado";
            	return 0;
       		}
        	$this->Conexion_ID->autocommit(false);
        	$result=$this->Conexion_ID->query("insert into categoria 
        	values ('".$obj->getIdCategoria()."','".$obj->getCodigo()."','".$obj->getNombre()."')");

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

    	function actualizar(ClaseCategoria $obj){
            if (!($obj instanceof ClaseCategoria)) {
                # code...
                $this->Error="Error de instaciado";
                return 0;
            }
            $this->Conexion_ID->autocommit(false);
            $result=$this->Conexion_ID->query("update categoria set codigo='".$obj->getCodigo()."', nombre='".$obj->getNombre()."' where idcategoria='".$obj->getIdCategoria()."'");

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
            $result=$this->Conexion_ID->query(" delete from categoria where idcategoria='".$id."'");

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

       		$result=$this->Conexion_ID->query("SELECT * FROM categoria where idcategoria='$id'");

        	$ObjE=null;

        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
                	# code...
                	$ObjE=new ClaseCategoria($fila->idcategoria,$fila->codigo,$fila->nombre);
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

	}
?>