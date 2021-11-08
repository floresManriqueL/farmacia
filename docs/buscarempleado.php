<?php
$opcion=$_GET["opcion"];
$criterio=$_GET["criterio"];
if($opcion=="buscarNombre"){
        require ("../DAO/DAOEmpleado.php");
        $daoP=new DAOEmpleado();
        $id=base64_decode($_REQUEST['criterio']);/* desencriptamos el id recibido en la url */
        $objP=null;
        $objP=$daoP->consultaIndividual($id);
	if($objP!=null){
		echo "<input type='hidden' name='cate' id='cate' value='".$objP->getIdEmpleado()."'>
                                            <label style='height: 30px;''><i class='fa fa-user' aria-hidden='true'></i> Empleado</label>&nbsp;&nbsp;&nbsp;
                                            <button type='button' style='height: 30px;'' class='btn btn-info' data-toggle='modal' data-target='#ventana1'>
                                                    <i class='fa fa-plus-square' aria-hidden='true'></i> Seleccionar
                                                </button>
                                            <input class='form-control' name='categoria' id='categoria' placeholder='Seleccione una Empleado' value='".$objP->getNombre()." ".$objP->getApellido()."' disabled='disabled'>";
	}else {
echo "<input type='hidden' name='cate' id='cate' >
                                            <label style='height: 30px;''><i class='fa fa-caret-square-o-right' aria-hidden='true'></i> Empleado</label>&nbsp;&nbsp;&nbsp;
                                            <button type='button' style='height: 30px;'' class='btn btn-info' data-toggle='modal' data-target='#ventana1'>
                                                    <i class='fa fa-plus-square' aria-hidden='true'></i> Seleccionar
                                                </button>
                                            <input class='form-control' name='categoria' id='categoria' placeholder='No existe Empleado'  disabled='disabled'>";
	}
}

?>