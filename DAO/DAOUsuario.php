<?php 
	require_once ("../conexion/DB_mysql.php");
	require_once ("../clases/ClaseUsuario.php");
	/**
	 * 
	 */
	class DAOUsuario{

		var $Conexion_ID;
    	var $Errno=0;
    	var $Error="";
		
		function __construct(){
			# code...
			$this->Conexion_ID=new DB_mysql();
    		$this->Conexion_ID=$this->Conexion_ID->getConexion();
		}

		function consultaAll(){
            return $this->consulta("SELECT a.idusuario AS idusuario, a.nombre AS nombreusuario, a.contrasena AS contrasena, a.tipo AS tipo, a.estado AS estado, a.idempleado AS idempleado, b.imagen AS imagen, b.nombre AS nombre, b.apellido AS apellido, b.dui AS dui, b.correo AS correo FROM usuario AS a INNER JOIN empleado AS b ON a.idempleado = b.idempleado");
        }

		function consulta($sql=""){
			# code...
        	if ($sql=="") {
       			 $this->Error="No ha especificado una consulta";
            	return 0;
        	}

        	$result=$this->Conexion_ID->query($sql);
        	$listausuario=array();

        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
               		# code...
                	$claseusuario=new ClaseUsuario($fila->idusuario,$fila->nombreusuario,$fila->contrasena,$fila->tipo,$fila->estado,$fila->idempleado);

                    $claseusuario->setImagenEmpleado($fila->imagen);
                    $claseusuario->setNombreEmpleado($fila->nombre);
                    $claseusuario->setApellidoEmpleado($fila->apellido);
                    $claseusuario->setCorreoEmpleado($fila->correo);
                    $claseusuario->setDuiEmpleado($fila->dui);
                    $listausuario[]=$claseusuario;

            	}
        	}
        	if (!$result) {
            	# code...
            	$this->Errno=mysqli_connect_errno();
            	$this->Error=mysqli_connect_error();
        	}

        	return $listausuario;
   		}

        function insertar(ClaseUsuario $obj){
            if (!($obj instanceof ClaseUsuario)) {
                # code...
                $this->Error="Error de instaciado";
                return 0;
            }
            $this->Conexion_ID->autocommit(false);
            $result=$this->Conexion_ID->query("insert into usuario 
            values ('".$obj->getIdUsuario()."','".$obj->getNombre()."','".$obj->getClave()."','".$obj->getTipo()."','".$obj->getEstado()."','".$obj->getIdEmpleado()."')");

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
            $result=$this->Conexion_ID->query(" delete from usuario where idusuario='".$id."'");

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

            $result=$this->Conexion_ID->query("SELECT * FROM usuario where idusuario='$id'");

            $ObjE=null;

            if ($result) {
                # code...
                while ($fila=$result->fetch_object()) {
                    # code...
                    $ObjE=new ClaseUsuario($fila->idusuario,$fila->nombre,$fila->contrasena,$fila->tipo,$fila->estado,$fila->idempleado);
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
            $result=$this->Conexion_ID->query("update usuario set estado='".$dato."'  where idusuario='".$id."'");

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