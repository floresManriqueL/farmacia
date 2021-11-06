<?php session_start();
error_reporting(0);
//echo $_SESSION['CORREO'];
$_SESSION['contador']=0;
$sss = $_SESSION['contador'];
 echo $sss;
$fecha1 = Date("i");
if($_SESSION['contador'] >= 5){
  //echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
             echo "<script type='text/javascript'>";
                    echo " Swal.fire({
                  title: 'SyS-Farmacia',
                  icon: 'success',
                  text: 'Bienvenido.',
                  showConfirmButton: false,
                  timer: 3000
                  });";
                  //  echo "location.href='docs/iniciomenu.php'";
                    echo "</script>";
  while($fecha1<$_SESSION['fecha']+1){
  $fecha1 = Date("i");
 //  echo "<center><label>USTED DEBE ESPERAR 1 MINUTO ANTES DE VOLVER A INTENTAR</label></center><br>";
 // echo "fecha 1:".$fecha1."";
  }
  $_SESSION['contador']=0;
 // $_SESSION['eror']='';
  echo "<script type='text/javascript'>";
  echo "location.href='index.php'";
  echo "</script>";
}
//echo $_SESSION['CORREO'];
 /*Include 'docs/SED.php';
 $clave="hola1234";
 echo $clave."<br>";
 $claveE=SED::encryption($clave);
 echo $claveE."<br>";
 $claveD=SED::decryption($claveE);
 echo $claveD."<br>";*/

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
      <script src="docs/js/js_login.js"></script>
</head>

<body style="background-color: rgb(100,100,100);" class="body-Login-back">

    <div class="container">
   
        <div class="row">
           
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                 <center><!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
                <a class="navbar-brand" href="login.html">
                   <h4 style="color: rgb(255,255,255); font-weight: 900;"><i class="fa fa-hand-o-right" aria-hidden="true"></i>  <i class="fa fa-heartbeat" aria-hidden="true"></i> FARMACIA LA BENDICION</h4><img style="height: 110px; width: 150px" src="assets/img/ver1.png" alt="" ></img> 
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
                        <h3 class="panel-title"><i class="fa fa-user-circle" aria-hidden="true"></i> Por favor, registrese</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-group" action="index.php" method="post" id="farmac" name="farmac">
          <input type="hidden" name="bandera" id="bandera">
          <input type="hidden" name="baccion" id="baccion" value="">
                                <div class="form-group">
                                     <div class="form-group">
            <label id="usu" class="control-label"><i class="fa fa-user" aria-hidden="true"></i> USUARIO</label>
            <input class="form-control"  type="text" id="usuario" name="usuario" placeholder="Usuario" autocomplete="off" autofocus>
        
                                </div>
                                <div class="form-group">
                                 <label id="clav" class="control-label"><i class="fa fa-unlock" aria-hidden="true"></i> CONTRASEÑA</label>
            <input class="form-control" type="password" id="clave" name="clave" placeholder="Contraseña">
                                </div>
                               <div class="form-group">
            <div class="utility">
              <p class="semibold-text mb-2"><center><a href="recupc.php">Olvidaste tu contraseña?</a></center></p>
            </div>
            <div id="nomas"></div>
          </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!--<a href="index.html" class="btn btn-lg btn-success btn-block"> Entrar</a>-->
                                 <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"  onclick="validar()"><i class="fa fa-sign-in fa-lg fa-fw"></i>Entrar</button> 
                                           
                               </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
         // echo "fecha :".$fecha."";
                 echo "<script type='text/javascript'>";
                    echo " Swal.fire({
                  title: 'SyS-Farmacia',
                  icon: 'success',
                  text: 'Bienvenido.',
                  showConfirmButton: false,
                  timer: 3000
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
          // echo "hola";
      if($_SESSION['CORREO'] != ''){
            if($_SESSION['CORREO']==$clave){
          //    echo "hola";
                require_once "conexion/DB_mysql.php";  
            $Conexion_IDw=new DB_mysql();
            $Conexion_IDw= $Conexion_IDw->getConexion();
            $resultW=$Conexion_IDw->query("SELECT idusuario as idusuario, nombre as nombre, contrasena as contrasena, tipo as tipo, estado as estado, idempleado as idempleado FROM usuario
             WHERE nombre ='$usuario'");
            if($resultW){
              // echo "hola";
             //  echo $usuario;
             // echo $_SESSION['CORREO'];
             // echo $_SESSION['CORREO'];
               while ($filaW=$resultW->fetch_object()) {
               //  echo "hola";
                  if($filaW->estado=='Activo'){
                //    echo "hola";
                 //   $_SESSION['CORREO'] ='';
                $_SESSION['idusuario']=$filaW->idusuario;
                $_SESSION['nombre']=$filaW->nombre;
                $_SESSION['idempleado']=$filaW->idempleado;
                $_SESSION['tipo']=$filaW->tipo;
                $_SESSION['estado']=$filaW->estado;
               // $_SESSION['eror']='USTED DEBE ESPERAR 1 MINUTO ANTES DE VOLVER A INTENTAR';
                     echo "<script type='text/javascript'>";
                    echo " Swal.fire({
                  title: 'SyS-Farmacia',
                  icon: 'success',
                  text: 'Bienvenido.',
                  showConfirmButton: false,
                  timer: 3000
                  });";
                    echo "location.href='docs/iniciomenu.php'";
                    echo "</script>";
                  }
                 // }else{
                     /* echo "<script type='text/javascript'>"; 
                      echo " Swal.fire({
                      title: 'SyS-Farmacia',
                      icon: 'error',
                      text: 'Datos incorectos!',
                      showConfirmButton: false,
                      timer: 2000
                      });";
                      echo "location.href='index.php'";
                       echo "</script>";*/
                //  }
               }
            }
            }
          }

           require_once "conexion/DB_mysql.php";  
        $Conexion_ID=new DB_mysql();
        $Conexion_ID= $Conexion_ID->getConexion();
        $result=$Conexion_ID->query("SELECT idusuario as idusuario, nombre as nombre, contrasena as contrasena, tipo as tipo, estado as estado, idempleado as idempleado FROM usuario WHERE nombre ='$usuario'");
        if($result){
            while ($fila=$result->fetch_object()) {
                # code...
              Include 'docs/SED.php';
              $claveD=SED::decryption($fila->contrasena);
            //  echo $claveD;
              if($claveD==$clave){
              if($fila->estado=='Activo'){
                $_SESSION['idusuario']=$fila->idusuario;
                $_SESSION['nombre']=$fila->nombre;
                $_SESSION['idempleado']=$fila->idempleado;
                $_SESSION['tipo']=$fila->tipo;
                $_SESSION['estado']=$fila->estado;
                    # code...
                    echo "<script type='text/javascript'>";
                    echo " Swal.fire({
                  title: 'SyS-Farmacia',
                  icon: 'success',
                  text: 'Bienvenido.',
                  showConfirmButton: false,
                  timer: 3000
                  });";
                    echo "location.href='docs/iniciomenu.php'";
                    echo "</script>";
                
            }//fin activo
          }else{
             echo "<script type='text/javascript'>";
                    echo " Swal.fire({
                  title: 'SyS-Farmacia',
                  icon: 'error',
                  text: 'Contraseña incorrecta',
                  showConfirmButton: false,
                  timer: 3000
                  });";
                    echo "location.href='index.php'";
                    echo "</script>";
          }
          }
              
        }
          
      }//fin else


        echo "<script type='text/javascript'>"; 
          echo " Swal.fire({
          title: 'SyS-Farmacia',
          icon: 'error',
          text: 'Datos incorectos!',
          showConfirmButton: false,
          timer: 2000
          });";
          echo "</script>";

 }//fin add
  
  

?>