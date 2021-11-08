<?php
$opcion=$_GET["opcion"];
$criterio=$_GET["criterio"];
if($opcion=="buscarNombre"){
        require ("../DAO/DAOCargo.php");
        $daoP=new DAOCargo();
        $id=base64_decode($_REQUEST['criterio']);/* desencriptamos el id recibido en la url */
        $objP=null;
        $objP=$daoP->consultaIndividual($id);
	if($objP!=null){
		echo "<input type='hidden' name='cate' id='cate' value='".$objP->getIdCargo()."'>
                                            <label style='height: 30px;''><i class='fa fa-caret-square-o-right' aria-hidden='true'></i> Cargo</label>&nbsp;&nbsp;&nbsp;
                                            <button type='button' style='height: 30px;'' class='btn btn-info' data-toggle='modal' data-target='#ventana1'>
                                                    <i class='fa fa-plus-square' aria-hidden='true'></i> Seleccionar
                                                </button>
                                            <input class='form-control' name='categoria' id='categoria' placeholder='Seleccione una Cargo' value='".$objP->getNombre()."' disabled='disabled'>";
	}else {
echo "<input type='hidden' name='cate' id='cate' >
                                            <label style='height: 30px;''><i class='fa fa-caret-square-o-right' aria-hidden='true'></i> Cargo</label>&nbsp;&nbsp;&nbsp;
                                            <button type='button' style='height: 30px;'' class='btn btn-info' data-toggle='modal' data-target='#ventana1'>
                                                    <i class='fa fa-plus-square' aria-hidden='true'></i> Seleccionar
                                                </button>
                                            <input class='form-control' name='categoria' id='categoria' placeholder='No existe Cargo'  disabled='disabled'>";
	}
}

?>