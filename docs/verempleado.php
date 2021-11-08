<?php
$opcion=$_GET["opcion"];
$criterio=$_GET["criterio"];
if($opcion=="buscarNombre"){
  require_once "../DAO/DAOEmpleado.php";
  $daoP = new DAOEmpleado();
  //$id=base64_decode($_REQUEST['criterio']);
  $objP = null;
  $objP = $daoP->consultaIndividual($criterio);
  if($objP!=null){
    echo "
     <div class='col-lg-6'>
        <div class='form-group'>
        <label> <b><big>Fotografia del Empleado:</big></b></label>
        <br></br>
        <img style='width: 200px; height: auto; margin: auto;' src='../imagenes/empleados/".$objP->getImagen()."'>
        </div>
        <div class='form-group'>
        <label> <b><big>DUI:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getDui()."' disabled>
        </div>
        <div class='form-group'>
         <label> <b><big>Estado Familiar:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getEstadoCivil()."' disabled>
        </div>
        <div class='form-group'>
         <label> <b><big>Fecha de Nacimiento:</big></b></label>
        <textarea style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' rows='3' disabled>'".$objP->getFechaNaci()."'</textarea>
        </div>
        <div class='form-group'>
         <label> <b><big>Direccion:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getDireccion()."' disabled>
        </div>
      </div>
      <div class='col-lg-6'>
      <br>
      <div class='form-group'>
      <label> <b><big>Nombres:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getNombre()."' disabled>
        </div>
        <br>
        <div class='form-group'>
        <label> <b><big>Apellidos:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getApellido()."' disabled>
        </div>
        <br>
        <div class='form-group'>
        <label> <b><big>NIT:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getNit()."' disabled>
        </div>
        <div class='form-group'>
        <label> <b><big>Genero:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getGenero()."' disabled>
        </div>
        <div class='form-group'>
        <label> <b><big>Telefono:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getTelefono()."' disabled>
        </div>
        <div class='form-group'>
        <label> <b><big>Correo:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getCorreo()."' disabled>
        </div>
        <div class='form-group'>
        <label> <b><big>Salario:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getSalario()."' disabled>
        </div>
        <div class='form-group'>
        <label> <b><big>Cargo:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getNombreCargo()."' disabled>
        </div>
      </div>
          ";
  }else {
    echo "<input type='text' class='form-control' placeholder='Empleado No Existe' name='mascota' id='mascota' disabled='true'>";
  }
}

?>