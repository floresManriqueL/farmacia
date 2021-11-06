<?php 
	require_once ("../conexion/DB_mysql.php");
	require_once ("../clases/ClaseEmpleado.php");

	/**
	 * 
	 */
	class DAOEmpleado{

		var $Conexion_ID;
    	var $Errno=0;
    	var $Error="";
		
		function __construct(){
			# code...
			$this->Conexion_ID=new DB_mysql();
    		$this->Conexion_ID=$this->Conexion_ID->getConexion();
		}

        function consultaAll(){
            return $this->consulta("SELECT a.idempleado AS idempleado, a.imagen AS imagen, a.nombre AS nombre, a.apellido AS apellido, a.estado_civil AS estado_civil, a.nit AS nit, a.dui AS dui, a.salario AS salario, a.direccion AS direccion, a.genero AS genero, a.fecha_naci AS fecha_naci, a.correo AS correo, a.telefono AS telefono, a.idfarmacia AS idfarmacia, a.idcargo AS idcargo, b.nombre AS cargo FROM empleado AS a INNER JOIN cargo AS b ON a.idcargo = b.idcargo");
        }

		function consulta($sql=""){
			# code...
        	if ($sql=="") {
       			 $this->Error="No ha especificado una consulta";
            	return 0;
        	}

        	$result=$this->Conexion_ID->query($sql);
        	$listaemple=array();

        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
               		# code...
                	$claseempe=new ClaseEmpleado($fila->idempleado,$fila->imagen,$fila->nombre,$fila->apellido,$fila->estado_civil,$fila->nit,$fila->dui,$fila->salario,$fila->direccion,$fila->genero,$fila->fecha_naci,$fila->correo,$fila->telefono,$fila->idfarmacia,$fila->idcargo);
                    $claseempe->setNombreCargo($fila->cargo);
                    $listaemple[]=$claseempe;
            	}
        	}
        	if (!$result) {
            	# code...
            	$this->Errno=mysqli_connect_errno();
            	$this->Error=mysqli_connect_error();
        	}

        	return $listaemple;
   		}

   		function insertar(ClaseEmpleado $obj){
        	if (!($obj instanceof ClaseEmpleado)) {
           		# code...
            	$this->Error="Error de instaciado";
            	return 0;
       		}
        	$this->Conexion_ID->autocommit(false);
        	$result=$this->Conexion_ID->query("insert into empleado 
        	values ('".$obj->getIdEmpleado()."','".$obj->getImagen()."','".$obj->getNombre()."','".$obj->getApellido()."','".$obj->getEstadoCivil()."','".$obj->getNit()."','".$obj->getDui()."','".$obj->getSalario()."','".$obj->getDireccion()."','".$obj->getGenero()."','".$obj->getFechaNaci()."','".$obj->getCorreo()."','".$obj->getTelefono()."','".$obj->getIdFarmacia()."','".$obj->getIdCargo()."')");

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

        function actualizar(ClaseEmpleado $obj){
            if (!($obj instanceof ClaseEmpleado)) {
                # code...
                $this->Error="Error de instaciado";
                return 0;
            }
            $this->Conexion_ID->autocommit(false);
            $result=$this->Conexion_ID->query("update empleado set imagen='".$obj->getImagen()."', nombre='".$obj->getNombre()."', apellido='".$obj->getApellido()."', estado_civil='".$obj->getEstadoCivil()."', nit='".$obj->getNit()."', dui='".$obj->getDui()."', salario='".$obj->getSalario()."', direccion='".$obj->getDireccion()."', genero='".$obj->getGenero()."', fecha_naci='".$obj->getFechaNaci()."', correo='".$obj->getCorreo()."', telefono='".$obj->getTelefono()."', idcargo='".$obj->getIdCargo()."' where idempleado='".$obj->getIdEmpleado()."'");

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
            $result=$this->Conexion_ID->query(" delete from empleado where idempleado='".$id."'");

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

       		$result=$this->Conexion_ID->query("SELECT a.idempleado AS idempleado, a.imagen AS imagen, a.nombre AS nombre, a.apellido AS apellido, a.estado_civil AS estado_civil, a.nit AS nit, a.dui AS dui, a.salario AS salario, a.direccion AS direccion, a.genero AS genero, a.fecha_naci AS fecha_naci, a.correo AS correo, a.telefono AS telefono, a.idfarmacia AS idfarmacia, a.idcargo AS idcargo, b.nombre AS cargo, b.idcargo AS idcargo FROM empleado AS a INNER JOIN cargo AS b ON a.idcargo = b.idcargo where idempleado='$id'");

        	$ObjE=null;

        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
                	# code...
                	$ObjE=new ClaseEmpleado($fila->idempleado,$fila->imagen,$fila->nombre,$fila->apellido,$fila->estado_civil,$fila->nit,$fila->dui,$fila->salario,$fila->direccion,$fila->genero,$fila->fecha_naci,$fila->correo,$fila->telefono,$fila->idfarmacia,$fila->idcargo);
                    $ObjE->setNombreCargo($fila->cargo);
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

        function consultaIndividualDui($id){
            if ($id=="") {
                # code...
                $this->Error="No ha especificado una consulta SQL";
                return 0;
            }

            $result=$this->Conexion_ID->query("SELECT * FROM empleado where dui='$id'");

            $ObjE=null;

            if ($result) {
                # code...
                while ($fila=$result->fetch_object()) {
                    # code...
                    $ObjE=new ClaseEmpleado($fila->idempleado,$fila->dui,$fila->nombre,$fila->direccion,$fila->telefono,$fila->correo,$fila->idcargo,$fila->rol,$fila->usuario,$fila->clave);
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