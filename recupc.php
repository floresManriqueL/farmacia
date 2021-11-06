<?php session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
  <title>FARMACIA LA BENDICION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo2.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login_regist.css">
     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="docs/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="docs/js/jquery.maskedinput.min.js" type="text/javascript"></script>

   <script type="text/javascript">
   jQuery(function($){
            // Definimos las mascaras para cada input
            $("#dui").mask("99999999-9");
            //$("#telefono").mask("9999-9999");
        });
    function validarre() {
       // if(document.getElementById('correo').value == ""){
             if (document.getElementById('dui').value == ""){
              //llamra
              str = "dui";
              te = "Complete el campo DUI antes de Recuperar correo";
              var usuario = document.getElementById('dui');
              var usu = document.getElementById('du');
              usu.style.cssText = 'color: rgb(255, 0, 0);';
              usuario.style.cssText = 'border-color: rgb(255, 0, 0);';
              Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: te,
                    timer: 4000
                 });
            }else {
              document.getElementById('bandera').value = "add";
              document.farmaci1.submit();
            }
       /* }else{
           document.getElementById('bandera').value = "addcorreo";
           document.farmaci1.submit();
        }*/
  
}

function redirec1(){
     location.href="recu.php";
}
 $(document).ready(function(){
  $("#dui").keyup(function(e){
     // e.preventDefault();
       var dui = document.getElementById('dui');
      var du = document.getElementById('du');
      du.style.cssText = 'color: rgb(0, 0, 0);';
      dui.style.cssText = 'border-color: rgb(0, 0, 0);';

  });
   });
</script>
    <style type="text/css">
    .backgroundFondo{
    background: url('assets/images/fon.jpg') no-repeat center top;
    background-size: cover;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
    }
    </style>
  </head>
  <body class="backgroundFondo">
<div class="container"> 
<div class="world-latest-articles">
    <div class="row">
      <div class="col-12 col-lg-12">
 <center><!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
                <a class="navbar-brand" href="login.html">
                   <h4 style="color: rgb(255,255,255); font-weight: 900;">&nbsp;<i class="fa fa-hand-o-right" aria-hidden="true"></i>  <i class="fa fa-heartbeat" aria-hidden="true"></i> FARMACIA LA BENDICION</h4>&nbsp;<img style="height: 110px; width: 150px" src="assets/img/ver1.png" alt="" ></img> 
                </a></center>
    <div class="form">
      <form class="form-group" action="recupc.php" method="post" id="farmaci1" name="farmaci1">
          <input type="hidden" name="bandera" id="bandera">
          <input type="hidden" name="baccion" id="baccion" value="">
        <div id="signup">
            <h4 class="text-center" style="color: #333; font-weight: bold;"><i class="fa fa-user-circle" aria-hidden="true"></i> Recuperacion de contraseña</h4>
            
                <div class="field-wrap">
                    <label id="du" class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i> DUI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-control"  type="text" id="dui" name="dui" placeholder="Ingrese DUI" autocomplete="off" autofocus>
                </div>
                <div class="field-wrap">
                    <label id="clav" class="control-label"><i class="fa fa-envelope" aria-hidden="true"></i> CORREO:</label>
                     <input class="form-control" type="text" id="correo" name="correo" placeholder="email" disabled="disabled" autocomplete="off">
                </div>

                <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" id="veri" onclick="validarre()"><i class="fa fa-check-square-o"></i> Verificar DUI</button>                               
                               </div>

                <a href="index.php" id="nuevaCuenta" title="Volver">Regresar a Iniciar sesión..!</a>

                <br>    
                  
        </div>
     </form>
    </div>
</div>
</div>
</div>   
</div>




<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    
  </body>
</html>
<?php

    $bandera=(isset($_REQUEST["bandera"]))?$_REQUEST["bandera"]:"";   
    $duiw=(isset($_REQUEST["dui"]))?$_REQUEST["dui"]:"";
    $correo=(isset($_REQUEST["correo"]))?$_REQUEST["correo"]:"";
    
    if($bandera=="add"){
        require_once "conexion/DB_mysql.php";  
        $Conexion_ID1=new DB_mysql();
        $Conexion_ID2= $Conexion_ID1->getConexion();
        $result=$Conexion_ID2->query("SELECT e.imagen as imagen, e.nombre as nombre, e.apellido as apellido, e.dui as dui, e.correo as correo, e.telefono as telefono, u.idusuario as idusuario, u.nombre as nombreu, u.tipo as tipo, u.estado as estado FROM usuario AS u INNER JOIN empleado AS e ON u.idempleado = e.idempleado WHERE e.dui = '$duiw'");
        if($result){
            while ($fila=$result->fetch_object()) {
                # code...
                 if($fila->estado=='Activo'){
                  $correo1=$fila->correo;
                  echo "<script type='text/javascript'>"; 
                  echo " Swal.fire({
                  title: 'SyS-Farmacia',
                  icon: 'success',
                  text: 'Tu correo a sido verificado',
                  showConfirmButton: false,
                  timer: 3000
                  });";
                  echo "$('#correo').val('".$correo1."');";
                   echo "$('#dui').val('".$fila->dui."');";
                  echo "location.href = 'gmail.php?id=".$correo1."'";
                 // echo "$('#ver').prop('disabled', false);";
                  echo "</script>";
                }
                  }

                
        }else{
          echo "<script type='text/javascript'>"; 
          echo " Swal.fire({
          title: 'SyS-Farmacia',
          icon: 'error',
          text: 'Datos incorectos!',
          showConfirmButton: false,
          timer: 2000
          });";
          echo "</script>";
        }

    }

?>