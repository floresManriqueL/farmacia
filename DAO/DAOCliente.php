<?php 
	require_once ("../conexion/DB_mysql.php");
	require_once ("../clases/ClaseCliente.php");
	/**
	 * 
	 */
	class DAOCliente{

		var $Conexion_ID;
    	var $Errno=0;
    	var $Error="";
		
		function __construct(){
			# code...
			$this->Conexion_ID=new DB_mysql();
    		$this->Conexion_ID=$this->Conexion_ID->getConexion();
		}

		function consultaAll(){
            return $this->consulta("select * from cliente");
        }

		function consulta($sql=""){
			# code...
        	if ($sql=="") {
       			 $this->Error="No ha especificado una consulta";
            	return 0;
        	}

        	$result=$this->Conexion_ID->query($sql);
        	$listacliente=array();

        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
               		# code...
                	$listacliente[]=new ClaseCliente($fila->idcliente,$fila->nombre,$fila->apellido,$fila->telefono,$fila->direccion);
            	}
        	}
        	if (!$result) {
            	# code...
            	$this->Errno=mysqli_connect_errno();
            	$this->Error=mysqli_connect_error();
        	}

        	return $listacliente;
   		}

   		function insertar(ClaseCliente $obj){
        	if (!($obj instanceof ClaseCliente)) {
           		# code...
            	$this->Error="Error de instaciado";
            	return 0;
       		}
        	$this->Conexion_ID->autocommit(false);
        	$result=$this->Conexion_ID->query("insert into cliente 
        	values ('".$obj->getIdCliente()."','".$obj->getNombre()."','".$obj->getApellido()."','".$obj->getTelefono()."','".$obj->getDireccion()."')");

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

    	function actualizar(ClaseCliente $obj){
            if (!($obj instanceof ClaseCliente)) {
                # code...
                $this->Error="Error de instaciado";
                return 0;
            }
            $this->Conexion_ID->autocommit(false);
            $result=$this->Conexion_ID->query("update cliente set nombre='".$obj->getNombre()."', apellido='".$obj->getApellido()."'
            , telefono='".$obj->getTelefono()."'
            , direccion='".$obj->getDireccion()."' where idcliente='".$obj->getIdCliente()."'");

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
            $result=$this->Conexion_ID->query(" delete from cliente where idcliente='".$id."'");

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

       		$result=$this->Conexion_ID->query("SELECT * FROM cliente where idcliente='$id'");

        	$ObjE=null;

        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
                	# code...
                	$ObjE=new ClaseCliente($fila->idcliente,$fila->nombre,$fila->apellido
                    ,$fila->telefono,$fila->direccion);
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