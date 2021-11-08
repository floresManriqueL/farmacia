<?php
    require_once("../DAO/Modelo.php");
    $modelo = new Modelo();
  if (isset($_POST['validar_campos']) && $_POST['validar_campos']=="si_por_campo") {

  
    $array_seleccionar = array();
    $array_seleccionar['table']="empleado";
    $array_seleccionar['campo']="idempleado";

    if ($_POST['tipo']=="correo") {
      $array_seleccionar['correo']=$_POST['campo'];
    }else if ($_POST['tipo']=="nit") {
      $array_seleccionar['nit']=$_POST['campo'];
    }else if ($_POST['tipo']=="dui") { 
      $array_seleccionar['dui']=$_POST['campo'];
    }else{
      $array_seleccionar['telefono']=$_POST['campo'];
    }



    $resultado = $modelo->seleccionar_cualquiera($array_seleccionar);
    
    if ($resultado[0]==0 && $resultado[4]==0) {
      print json_encode(array("Exito",$resultado,$array_seleccionar));
      exit();
    }else{
      
      print json_encode(array("Error",$resultado,$array_seleccionar));
      exit();
    }



  }
?>