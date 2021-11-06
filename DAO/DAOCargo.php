<?php 
	require_once ("../conexion/DB_mysql.php");
	require_once ("../clases/ClaseCargo.php");
	/**
	 * 
	 */
	class DAOCargo{

		var $Conexion_ID;
    	var $Errno=0;
    	var $Error="";
		
		function __construct(){
			# code...
			$this->Conexion_ID=new DB_mysql();
    		$this->Conexion_ID=$this->Conexion_ID->getConexion();
		}

		function consultaAll(){
            return $this->consulta("select * from cargo");
        }

		function consulta($sql=""){
			# code...
        	if ($sql=="") {
       			 $this->Error="No ha especificado una consulta";
            	return 0;
        	}

        	$result=$this->Conexion_ID->query($sql);
        	$listacargo=array();

        	if ($result) {
            	# code...
            	while ($fila=$result->fetch_object()) {
               		# code...
                	$listacargo[]=new ClaseCargo($fila->idcargo,$fila->codigo,$fila->nombre);
            	}
        	}
        	if (!$result) {
            	# code...
            	$this->Errno=mysqli_connect_errno();
            	$this->Error=mysqli_connect_error();
        	}

        	return $listacargo;
   		}

        function consultaIndividual($id){
            if ($id=="") {
                # code...
                $this->Error="No ha especificado una consulta SQL";
                return 0;
            }

            $result=$this->Conexion_ID->query("SELECT * FROM cargo where idcargo='$id'");

            $ObjE=null;

            if ($result) {
                # code...
                while ($fila=$result->fetch_object()) {
                    # code...
                    $ObjE=new ClaseCargo($fila->idcargo,$fila->codigo,$fila->nombre);
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