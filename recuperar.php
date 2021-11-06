<?php session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARMACIA LA BENDICION</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    
     <script type="text/javascript">
       function validarre() {
        if(document.getElementById('correo').value == ""){
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
              document.farmaci.submit();
            }
        }else{
           document.getElementById('bandera').value = "addcorreo";
           document.farmaci.submit();
        }
  
}

function redirec1(){
     location.href="recu.php";
}
    jQuery(function($){
            // Definimos las mascaras para cada input
            $("#dui").mask("99999999-9");
            //$("#telefono").mask("9999-9999");
        });

     $(document).ready(function(){
      
       $("#dui").keyup(function(e){
     // e.preventDefault();
           document.getElementById('dui').value='';

    });
        });

   </script>

</head>

<body style="background-color: rgb(100,100,100);">

    <div class="wrapper">
   
        <div class="row">
           
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                 <center><!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
                <a class="navbar-brand" href="login.html">
                   <h4 style="color: rgb(255,255,255); font-weight: 900;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-hand-o-right" aria-hidden="true"></i>  <i class="fa fa-heartbeat" aria-hidden="true"></i> FARMACIA LA BENDICION</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img style="height: 110px; width: 150px" src="assets/img/ver1.png" alt="" ></img> 
                </a></center>
                 <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="user-section" href="index.html">
                   <center> <img style="height: 150px; width: 200px" src="assets/img/ver1.png" alt="" ></img> </center>
                </a>-->

             <!--   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                   <center><h1 style="color: rgb(255,255,255); font-weight: 900;">FARMACIA LA BENDICION</h1></center>
                </a>
                <br></br>
                <br></br>-->
                <br></br>
                <br></br>
                <br></br>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user-circle" aria-hidden="true"></i> Recuperacion de contraseña</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-group" action="recuperar.php" method="post" id="farmaci" name="farmaci">
          <input type="hidden" name="bandera" id="bandera">
          <input type="hidden" name="baccion" id="baccion" value="">
                              
                                     <div class="form-group">
            <label id="du" class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i> DUI</label>
            <input class="form-control"  type="text" id="dui" name="dui" placeholder="Ingrese DUI" autocomplete="off" autofocus>
        
                                </div>
                                <div class="form-group">
                                 <label id="clav" class="control-label"><i class="fa fa-envelope" aria-hidden="true"></i> CORREO</label>
            <input class="form-control" type="text" id="correo" name="correo" placeholder="email" disabled="disabled" autocomplete="off">
                                </div>
                               <div class="form-group">
            <div class="utility">
              <p class="semibold-text mb-2"><center><a href="index.php">Regregar a Inicio de Sesion</a></center></p>
            </div>
            <div id="nomas"></div>
          </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!--<a href="index.html" class="btn btn-lg btn-success btn-block"> Entrar</a>-->
                                 <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" id="veri" onclick="validarre()"><i class="fa fa-check-square-o"></i> Verificar DUI</button>                            
                               </div>
                           
                        </form>
                    <!--    <input type="button" id="ver" name="ver" class="btn btn-primary btn-block" id="btn-entrar" onclick="redirec1()" value="Enviar contraseña a Correo" disabled="disabled"></input>-->
                                        
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="docs/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="docs/js/jquery.maskedinput.min.js" type="text/javascript"></script>
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

    }else if($bandera=="addcorreo"){
         
    }else{
      /* echo "<script type='text/javascript'>"; 
          echo " Swal.fire({
          title: 'SyS-Farmacia',
          icon: 'error',
          text: 'Datos incorectos!',
          showConfirmButton: false,
          timer: 2000
          });";
          echo "</script>";*/
    }

?>