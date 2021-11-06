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
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo2.png">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="../assets/css/style.css" rel="stylesheet" />
      <link href="../assets/css/main-style.css" rel="stylesheet" />
       <!-- Page-Level CSS -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

     <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>

    <script type="text/javascript" src="../jquery/sweetalert.min.js"></script>
    <script src="../jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../jquery/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="js/js_empleado.js"></script>
    <link href="css/img.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
      function red(){
        location.href="iniciomenu.php";
      }
    </script>
</head>

<body>
    <!--  wrapper -->
   
<div id="wrapper">
   <?php include"menu.php";?>
   <div style="background-color: rgb(150, 150, 150);" id="page-wrapper">
    <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-address-card" aria-hidden="true"></i>Información de Cuenta </h1>
                </div>
                <!--end page header -->
            </div>
            <form action="" method="post" class="form-group " id="produc" name="produc" enctype="multipart/form-data">
        <input type="hidden" name="bandera" id="bandera">
        <input type="hidden" name="baccion" id="baccion" value="">
           <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                      <div style="background-color: rgb(41, 60, 72);" class="panel-heading">
                           <h5 style="color: rgb(255, 255, 255);"><i class="fa fa-address-book-o" aria-hidden="true"></i> Gestión de Cuenta</h5>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                 <?php
                     require_once "../DAO/DAOEmpleado.php";
                     $daoPx = new DAOEmpleado();
                   //$id=base64_decode($_REQUEST['criterio']);
                    $objP = null;
                   // echo $_SESSION['idempleado'];
                    $objP = $daoPx->consultaIndividual($_SESSION['idempleado']);
                       if($objP!=null){
    echo "
     <div class='col-lg-6'>
        <div class='form-group'>
        <label> <b><big>Fotografía del Empleado:</big></b></label>
        <br></br>
        <img style='width: auto; height: 200px; margin: auto;' src='../imagenes/empleados/".$objP->getImagen()."'>
        </div>
        <div class='form-group'>
      <label> <b><big>Nombres:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getNombre()."' disabled>
        </div>
        <div class='form-group'>
        <label> <b><big>Apellidos:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getApellido()."' disabled>
        </div>
        <div class='form-group'>
         <label> <b><big>Estado Familiar:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getEstadoCivil()."' disabled>
        </div>
        <div class='form-group'>
         <label> <b><big>Fecha de Nacimiento:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getFechaNaci()."' disabled>
        </div>
      </div>
      <div class='col-lg-6'>
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
        <label> <b><big>Cargo:</big></b></label>
        <input style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' type='text' value='".$objP->getNombreCargo()."' disabled>
        </div>
        <div class='form-group'>
         <label> <b><big>Direccion:</big></b></label>
        <textarea style='border-color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); color: rgb(27,167,16); font-weight: 1000;' class='form-control' rows='3' disabled>'".$objP->getDireccion()."'</textarea>
        </div>
      </div>
          ";
  }else {
    echo "<input type='text' class='form-control' placeholder='Empleado No Existe' name='mascota' id='mascota' disabled='true'>";
  }
                     ?>
                            </div>
                        </div>
                      <div style="background-color: rgb(41, 60, 72);" class="panel-footer">
                            <center><button class="btn btn-success" type="button" onclick="validacion()" ><i class="fa fa-fw fa-lg fa-check-circle"></i> <?php if(isset($id)) echo "Editar"; else echo "Cambiar Usuario y Contrasena";?> </button> &nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-primary" id="btn-cancelar" onclick="red()"><i class="fa fa-times-circle" aria-hidden="true"></i> Cerrar</button></center>                                    
                        </div>
                      </div>                  
                </div>
          </div>
      </form>
   </div>
</div>
    <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <!-- Page-Level Plugin Scripts-->
    <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
     
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="../main.js"></script>  
     <script type="text/javascript" src="../main1.js"></script>  
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
</body>

</html>
<?php

    $baccion=(isset($_REQUEST["baccion"]))?$_REQUEST["baccion"]:"";
    $bandera=(isset($_REQUEST["bandera"]))?$_REQUEST["bandera"]:"";
 
    
?>