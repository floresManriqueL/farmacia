<?php session_start();
error_reporting(0);
//echo $_SESSION['CORREO'];
//$_SESSION['contador']=0;
//$sss = $_SESSION['contador'];
 //echo $sss;
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
                  echo "$('#ventana1').modal('show');";
                  //  echo "location.href='docs/iniciomenu.php'";
                    echo "</script>";
  while($fecha1<$_SESSION['fecha']+1){
  $fecha1 = Date("i");
 //  echo "<center><label>USTED DEBE ESPERAR 1 MINUTO ANTES DE VOLVER A INTENTAR</label></center><br>";
  echo "<html lang='es'>
  <head>
    <title>FARMACIA LA BENDICION</title>
     <link rel='shortcut icon' type='image/x-icon' href='assets/img/logo2.png'> 
  </head>
  <style type='text/css'>
    .backgroundFondo{
    background: url('assets/images/los1.jpg') no-repeat center top;
    background-size: cover;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
    }
   </style>
  <body class='backgroundFondo'>
  </body>
  </html>";
  echo "<script type='text/javascript'>";
  echo "location.href='index.php'";
  echo "</script>";
  }
  $_SESSION['contador']=0;
 // $_SESSION['eror']='';

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
    <script src="docs/js/js_login.js"></script>

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

<?php
    include('msjs.php');
?>

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
       <form class="form-group" action="index.php" method="post" id="farmac" name="farmac">
          <input type="hidden" name="bandera" id="bandera">
          <input type="hidden" name="baccion" id="baccion" value="">

        <div id="signup">
            <h3 class="panel-title"><i class="fa fa-user-circle" aria-hidden="true"></i> Por favor, registrese</h3>
                <div class="field-wrap">
                    <label id="usu" class="control-label"><i class="fa fa-user" aria-hidden="true"></i> USUARIO</label>
            <input class="form-control"  type="text" id="usuario" name="usuario" placeholder="Usuario" autocomplete="off" autofocus>
                </div>
                <div class="field-wrap">
                    <label id="clav" class="control-label"><i class="fa fa-unlock" aria-hidden="true"></i> CONTRASEÑA</label>
            <input class="form-control" type="password" id="clave" name="clave" placeholder="Contraseña">
                </div>

                <div class="form-group btn-container">
            <button class="btn btn-success btn-block"  onclick="validar()"><i class="fa fa-sign-in fa-lg fa-fw"></i>Entrar</button> 
                                           
                               </div>

                <center><a href="recupc.php" id="nuevaCuenta" title="Volver">Olvidaste tu contraseña?</a></center>

                <br><br>    
                  
        </div>
   </form>
    </div>
</div>
</div>
</div>   
</div>
<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background-color: rgb(50, 50, 50);" class="modal-header">
        <button style="color: rgb(255, 255, 255);" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: rgb(255, 255, 255);" class="modal-title" id="myModalLabel"><i class="fa fa-list-ul" aria-hidden="true"></i> Lista de Categorias</h4>
      </div>
      <div class="modal-body">
          <div class="panel-body">
                         
                            
           </div>
      </div>
      <div  style="background-color: rgb(50, 50, 50);" class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>



<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

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
         // echo "fecha :".$fecha."";
                 echo "<script type='text/javascript'>";
                    echo " Swal.fire({
                  title: 'SyS-Farmacia',
                  icon: 'success',
                  text: 'Bienvenido.',
                  showConfirmButton: false,
                  timer: 5000
                  });";
                  echo "$('#ventana1').modal('show');";
                
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