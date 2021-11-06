<?php 
	require_once ("../conexion/DB_mysql.php");
	require_once ("../clases/ClaseMarca.php");
	/**
	 * 
	 */
	class DAOMarca{

		var $Conexion_ID;
    	var $Errno=0;
    	var $Error="";
		
		function __construct(){
			# code...
			$this->Conexion_ID=new DB_mysql();
    		$this->Conexion_ID=$this->Conexion_ID->getConexion();
		}

		function consultaAll(){
            return $this->consulta("select * from marca");
        }

		function consulta($sql=""){
			# code...
        	if ($sql=="") {
       			 $this->Error="No ha especificado una consulta";
            	return 0;
        	}

        	$result=$this->Conexion_ID->query($sql);
        	$listamarca=array();

        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
               		# code...
                	$listamarca[]=new ClaseMarca($fila->idmarca,$fila->codigo,$fila->nombre);
            	}
        	}
        	if (!$result) {
            	# code...
            	$this->Errno=mysqli_connect_errno();
            	$this->Error=mysqli_connect_error();
        	}

        	return $listamarca;
   		}

   		function insertar(ClaseMarca $obj){
        	if (!($obj instanceof ClaseMarca)) {
           		# code...
            	$this->Error="Error de instaciado";
            	return 0;
       		}
        	$this->Conexion_ID->autocommit(false);
        	$result=$this->Conexion_ID->query("insert into categoria 
        	values ('".$obj->getIdMarca()."','".$obj->getCodigo()."','".$obj->getNombre()."')");

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

    	function actualizar(ClaseMarca $obj){
            if (!($obj instanceof ClaseMarca)) {
                # code...
                $this->Error="Error de instaciado";
                return 0;
            }
            $this->Conexion_ID->autocommit(false);
            $result=$this->Conexion_ID->query("update categoria set codigo='".$obj->getCodigo()."', nombre='".$obj->getNombre()."' where idcategoria='".$obj->getIdMarca()."'");

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
            $result=$this->Conexion_ID->query(" delete from marca where idmarca='".$id."'");

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

       		$result=$this->Conexion_ID->query("SELECT * FROM marca where idmarca='$id'");

        	$ObjE=null;

        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
                	# code...
                	$ObjE=new ClaseMarca($fila->idmarca,$fila->codigo,$fila->nombre);
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