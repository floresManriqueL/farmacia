<?php
    require_once("../DAO/Modelo.php");
    $modelo = new Modelo();
  if (isset($_POST['validar_campos']) && $_POST['validar_campos']=="si_por_campo") {

  
    $array_seleccionar = array();
    $array_seleccionar['table']="usuario";
    $array_seleccionar['campo']="idusuario";

    if ($_POST['tipo']=="usser") {
      $array_seleccionar['nombre']=$_POST['campo'];
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