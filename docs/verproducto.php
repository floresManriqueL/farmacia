<?php
$opcion=$_GET["opcion"];
$criterio=$_GET["criterio"];
if($opcion=="buscarNombre"){
  require_once "../DAO/DAOProducto.php";
  $daoP = new DAOProducto();
  //$id=base64_decode($_REQUEST['criterio']);
  $objP = null;
  $objP = $daoP->consultaIndividual($criterio);
  if($objP!=null){
    echo "
     <div class='col-lg-6'>
        <div class='form-group'>
        <label> <b><big>Imagen:</big></b></label>
        <br></br>
        <img style='width: 200px; height: auto; margin: auto;' src='../imagenes/uploads/".$objP->getFoto()."''>
        </div>
        <div class='form-group'>
        <label> <b><big>Código:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getCodigo()."' disabled>
        </div>
        <div class='form-group'>
         <label> <b><big>Nombre:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getNombre()."' disabled>
        </div>
        <div class='form-group'>
         <label> <b><big>Descripción:</big></b></label>
        <textarea style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' rows='3' disabled>'".$objP->getDescripcion()."'</textarea>
        </div>
        <div class='form-group'>
         <label> <b><big>Presentación:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getTipo()."' disabled>
        </div>
      </div>
      <div class='col-lg-6'>
      <div class='form-group'>
      <label> <b><big>Estado:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getEstado()."' disabled>
        </div>
        <div class='form-group'>
        <label> <b><big>Cantidad:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='N° ".$objP->getCantidad()."' disabled>
        </div>
        <div class='form-group'>
        <label> <b><big>Unidades individuales:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getUnidades()."' disabled>
        </div>
        <div class='form-group'>
        <label> <b><big>Porcentaje de ganancia:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getPorganancia()." %' disabled>
        </div>
        <div class='form-group'>
        <label> <b><big>Categoria</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getNombreCategoria()."' disabled>
        </div>
        <div class='form-group'>
        <label> <b><big>Marca:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getNombreMarca()."' disabled>
        </div>
      </div>
          ";
  }else {
    echo "<input type='text' class='form-control' placeholder='Mascota No Existe' name='mascota' id='mascota' disabled='true'>";
  }
}

?>