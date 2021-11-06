<?php
$opcion=$_GET["opcion"];
$criterio=$_GET["criterio"];
if($opcion=="buscarNombre"){
        require ("../DAO/DAOMarca.php");
        $daoP=new DAOMarca();
        $id=base64_decode($_REQUEST['criterio']);/* desencriptamos el id recibido en la url */
        $objP=null;
        $objP=$daoP->consultaIndividual($id);
	if($objP!=null){
		echo "<input type='hidden' name='mar' id='mar' value='".$objP->getIdMarca()."'>
                                            <label style='height: 30px;''><i class='fa fa-thumb-tack' aria-hidden='true'></i> Marca</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type='button' style='height: 30px;'' class='btn btn-info' data-toggle='modal' data-target='#ventana1'>
                                                    <i class='fa fa-plus-square' aria-hidden='true'></i> Seleccionar
                                                </button>
                                            <input class='form-control' name='marca' id='marca' placeholder='Seleccione una Categoria' value='".$objP->getNombre()."' disabled='disabled'>";
	}else {
        echo "<input type='hidden' name='mar' id='mar' >
                                            <label style='height: 30px;''><i class='fa fa-thumb-tack' aria-hidden='true'></i> Marca</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type='button' style='height: 30px;'' class='btn btn-info' data-toggle='modal' data-target='#ventana1'>
                                                    <i class='fa fa-plus-square' aria-hidden='true'></i> Seleccionar
                                                </button>
                                            <input class='form-control' name='marca' id='marca' placeholder='No existe Categoria'  disabled='disabled'>";
	}
}

?>