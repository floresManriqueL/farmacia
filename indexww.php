<?php session_start();
error_reporting(0);
$fecha1 = Date("i");
if($_SESSION['contador'] >= 5){
  while($fecha1<$_SESSION['fecha']+1){
  $fecha1 = Date("i");
 // echo "fecha 1:".$fecha1."";
  }
  $_SESSION['contador']=0;
  echo "<script type='text/javascript'>";
  echo "location.href='index.php'";
  echo "</script>";
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <title>Login con PHP y MYSQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login_regist.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="docs/js/js_login.js"></script>
     <script type="text/javascript">
        function actual() {
         fecha=new Date(); //Actualizar fecha.
         hora=fecha.getHours(); //hora actual
         minuto=fecha.getMinutes(); //minuto actual
         segundo=fecha.getSeconds(); //segundo actual
         if (hora<10) { //dos cifras para la hora
            hora="0"+hora;
            }
         if (minuto<10) { //dos cifras para el minuto
            minuto="0"+minuto;
            }
         if (segundo<10) { //dos cifras para el segundo
            segundo="0"+segundo;
            }
         //ver en el recuadro del reloj:
         if(hora>=12){
         mireloj = "Hora: "+hora+" : "+minuto+" : "+segundo+" PM"; 
          }else{
             mireloj ="Hora: "+hora+" : "+minuto+" : "+segundo+" AM";
          }
         return mireloj; 
         }
function actualizar() { //función del temporizador
   mihora=actual(); //recoger hora actual
   mireloj=document.getElementById("reloj"); //buscar elemento reloj
   mireloj.innerHTML=mihora; //incluir hora en elemento
   }
setInterval(actualizar,1000);
   </script>
    <style type="text/css">
    .backgroundFondo{
    background: url('assets/images/fondo.jpg') no-repeat center top;
    background-size: cover;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
    }
    </style>
  </head>
  <body class="" style="background-color: rgb(100,100,100);">

<?php
    include('msjs.php');
?>

<div class="container" style="z-index: 3;"> 
<div class="world-latest-articles">
    <div class="row">
      <div class="col-12 col-lg-12">
     <a class="navbar-brand" href="index.php">
                   <h4 style="color: rgb(255,255,255); font-weight: 900;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-hand-o-right" aria-hidden="true"></i>  <i class="fa fa-heartbeat" aria-hidden="true"></i> FARMACIA LA BENDICION</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img style="height: 110px; width: 150px" src="assets/img/ver1.png" alt="" ></img> 
                </a>
    <div class="form">
        <div id="signup">
            <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user-circle" aria-hidden="true"></i> Por favor, registrese</h3>
                    </div>
            <form class="form-group" action="index.php" method="post" id="farmac" name="farmac">
          <input type="hidden" name="bandera" id="bandera">
          <input type="hidden" name="baccion" id="baccion" value="">
                <div class="field-wrap">
                     <label id="usu" class="control-label"><i class="fa fa-user" aria-hidden="true"></i> USUARIO</label>
            <input class="form-control"  type="text" id="usuario" name="usuario" placeholder="Usuario" utocomplete="off" autofocus>
                </div>
                <div class="field-wrap">
                    <label id="clav" class="control-label"><i class="fa fa-unlock" aria-hidden="true"></i> CONTRASEÑA</label>
            <input class="form-control" type="password" id="clave" name="clave" placeholder="Contraseña">
                </div>
               <p class="semibold-text mb-2"><center><a href="recuperar.php">Olvidaste tu contraseña?</a></center></p>
               
                <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"  onclick="validar()"><i class="fa fa-sign-in fa-lg fa-fw"></i>Entrar</button>                                 
                               </div>  
                  
            </form>
        </div>


        <div id="recuperarclave">
            <div class="panel-heading">
                        <h4 class="panel-title"><i class="fa fa-user-circle" aria-hidden="true"></i> Recuperacion de contraseña</h4>
                    </div>


            <form class="form-group" action="recuperar.php" method="post" id="farmaci" name="farmaci">
          <input type="hidden" name="bandera" id="bandera">
          <input type="hidden" name="baccion" id="baccion" value="">
                <div class="field-wrap">
                     <label id="du" class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i> DUI</label>
            <input class="form-control"  type="text" id="dui" name="dui" placeholder="Ingrese DUI" utocomplete="off" autofocus>
                </div>
                <div class="field-wrap">
                    <label id="clav" class="control-label"><i class="fa fa-envelope" aria-hidden="true"></i> CORREO</label>
            <input class="form-control" type="text" id="correo" name="correo" placeholder="email" disabled="disabled">
                </div>
            
               <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" id="veri" onclick="validarre()"><i class="fa fa-check-square-o"></i> Verificar DUI</button>                                 
                               </div>

                <a href="#" id="volver" class="mt-3 mb-4" title="Volver">Volver</a>
                <br><br>
            </form>
        </div>

    </div>
</div>
</div>
</div>   
</div>




<script src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
 $('#recuperarclave').hide(); 

$('#olvidar').on('click', function() {
    $('#signup').hide(); //para ocultar
    $("#recuperarclave").fadeIn("slow"); //mostrar
});

$('#volver').on('click', function() {
    $('#recuperarclave').hide(); //para ocultar
    $("#signup").fadeIn("slow"); //mostrar
});
</script>

    
  </body>
</html>
<?php

    $bandera=(isset($_REQUEST["bandera"]))?$_REQUEST["bandera"]:"";   
    $usuario=(isset($_REQUEST["usuario"]))?$_REQUEST["usuario"]:"";
    $clave=(isset($_REQUEST["clave"]))?$_REQUEST["clave"]:"";
    $contador=$_SESSION['contador']+1;

    if($bandera=="add"){
         $fecha= Date("i");
        $_SESSION['contador']=$contador;
        $_SESSION['fecha'] = $fecha;
        if($_SESSION['contador'] >= 5){
          echo "fecha :".$fecha."";
             echo "<script type='text/javascript'>"; 
             echo " Swal.fire({
             title: 'ESPERAR 1 MINTO".$fecha."',
             icon: 'error',
             text: 'Usted debe esperar antes de volver a intentarlo',
             showConfirmButton: false,
             timer: 120000
            });";
             echo "</script>"; 
         //  $_SESSION['contador']=0;
       //   $fecha1 = Date("i");
        //   echo "fecha 1 :".$fecha1."";
         // sleep(10);
        //  if($fecha1 >= $_SESSION['fecha']+1){
             // $_SESSION['contador']=0;
       //   }
        }else {
        //$_SESSION['contador']=$_SESSION['contador']+$contador;
        require_once "conexion/DB_mysql.php";  
        $Conexion_ID=new DB_mysql();
        $Conexion_ID= $Conexion_ID->getConexion();
        $result=$Conexion_ID->query("SELECT idusuario as idusuario, nombre as nombre, contrasena as contrasena, tipo as tipo, estado as estado, idempleado as idempleado FROM usuario WHERE nombre ='$usuario' and contrasena='$clave'");
        if($result){
            while ($fila=$result->fetch_object()) {
                # code...
                $_SESSION['idusuario']=$fila->idusuario;
                $_SESSION['nombre']=$fila->nombre;
                $_SESSION['idempleado']=$fila->idempleado;
                $_SESSION['tipo']=$fila->tipo;
                $_SESSION['estado']=$fila->estado;
                if ($fila->tipo=="Administrador") {
                    # code...
                    echo "<script type='text/javascript'>";
                    echo "location.href='docs/iniciomenu.php'";
                    echo "</script>";
                }else{
                    echo "<script type='text/javascript'>";
                    echo "location.href='docs/iniciomenu.php'";
                    echo "</script>";
                }
            }
        }
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