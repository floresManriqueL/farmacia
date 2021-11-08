
<?php session_start();

    if (isset($_REQUEST['id'])) {/* comprobamos si la variable que viene en la url si existe */
        # code...
        require ("../DAO/DAOCargo.php");
        $daoP=new DAOCargo();
        $id=base64_decode($_REQUEST['id']);/* desencriptamos el id recibido en la url */
        $objP=null;
        $objP=$daoP->consultaIndividual($id);
    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARMACIA LA BENDICIÓN</title>
    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     
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
    <script src="js/js_cargo.js"></script>
       <script type="text/javascript">
       </script>



</head>

<body>

 <div id="wrapper">
  <?php include"menu.php";?>
   <div style="background-color: rgb(150, 150, 150);" id="page-wrapper">
      <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-address-card" aria-hidden="true"></i> AGREGAR NUEVO CARGO</h1>
                </div>
                <!--end page header -->
            </div>
            <form action="" method="post" class="form-group " id="simi" name="simi">
        <input type="hidden" name="bandera" id="bandera">
        <input type="hidden" name="baccion" id="baccion" value="<?php if(isset($objP)) echo $objP->getIdCargo(); ?>">
        <div class="row">
                <div class="col-lg-12">
                   <div class="panel panel-default">
                       <div style="background-color: rgb(41, 60, 72);" class="panel-heading">
                           <h5 style="color: rgb(255, 255, 255);"><i class="fa fa-address-book-o" aria-hidden="true"></i> Gestión De Cargo</h5>
                        </div>
                          <div class="panel-body">
                            <div class="row">
                                  <div class="form-group">
                                             <div class="col-md-8">
                                                 <label id="cod"><i class="fa fa-minus-square" aria-hidden="true"></i> Código</label>
                                            <input class="form-control" 
                                            data-parsley-error-message="Campo requerido"
                                            required  type="text" id="codigo" name="codigo" value="<?php if(isset($objP)) echo $objP->getCodigo(); ?>" placeholder="Código Genérico" disabled>
                                        </div>
                                         <button class="btn btn-info" type="button" id="bgene"  onclick="generar()" disabled="disabled">Generar</button>
                                    </div>
                                    <div class="form-group" neme="gruponombre" id="gruponombre">
                                      <div class="col-md-8">
                                            <label id="nom"><i class="fa fa-minus-square" aria-hidden="true"></i> Nombre</label>

                                            <input   class="form-control"
                                            required   data-parsley-error-message="Campo requerido" autocomplete="off" type="text" id="nombre" name="nombre" value="<?php if(isset($objP)) echo $objP->getNombre(); ?>"  placeholder="Nombre Completo" onkeypress="return soloLetras(event)">
                                        </div>
                            </div>
                          </div>
                           
                   </div>
                   <div style="background-color: rgb(41, 60, 72);" class="panel-footer">
                                        <button class="btn btn-success" type="submit" 
                                        onclick="validacion()"><i class="fa fa-fw fa-lg fa-check-circle"></i> <?php if(isset($id)) echo "Editar"; else echo "Guardar";?> </button> &nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-primary" id="btn-cancelar" onclick="limpiar()"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</button>
                                         
                            </div>
                </div>
        </div>
      </form>
        <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                      <center>  <i class="fa fa-folder-open"></i><b> Copyright  © </b>2021 <b>&nbsp;FARMACIA LA BENDICIÓN </b>
        <b>&nbsp; </b> Reservados todos los derechos.</center>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
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
     
    <script type="../text/javascript" src="main.js"></script>  
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



<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>

       <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

    <script type="text/javascript" src="js/parsley.min.js"></script>


    <script  src="js/bootstrap-inputmask.min.js"></script>



</body>

</html>
<?php

    $baccion=(isset($_REQUEST["baccion"]))?$_REQUEST["baccion"]:"";
    $bandera=(isset($_REQUEST["bandera"]))?$_REQUEST["bandera"]:"";
 
    $nombre=(isset($_REQUEST["nombre"]))?$_REQUEST["nombre"]:"";
    $codigo=(isset($_REQUEST["codigo"]))?$_REQUEST["codigo"]:"";
  

    if($bandera=="add"){
        require_once "../DAO/DAOCargo.php";  
        $daoP=new DAOCargo();
        if ($daoP-> insertar(new ClaseCargo(null,$codigo,trim($nombre)))==1) {  
        echo "<script type='text/javascript'>"; 
         echo " Swal.fire({
  title: 'SyS-Farmacia',
  icon: 'success',
  text: 'Datos almacenados',
  showConfirmButton: false,
  timer: 2000
});
redi();";
        echo "</script>";
           
        } else {
              echo "<script type='text/javascript'>"; 
         echo " Swal.fire({
  title: 'SyS-Farmacia',
  icon: 'error',
  text: 'Error de guardado!',
  showConfirmButton: false,
  timer: 2000
});";
        echo "</script>";
        }
    }else if($bandera=="edicion"){
         echo "<script type='text/javascript'>"; 
         echo "men();";
        echo "</script>"; 
        require_once "../DAO/DAOCargo.php"; 
        $daoP=new DAOCargo();
        if ($daoP->actualizar(new ClaseCargo($baccion,$codigo,trim($nombre)))==1) {
            # code...
            echo "<script type='text/javascript'>"; 
         echo " Swal.fire({
  title: 'SyS-Farmacia',
  icon: 'success',
  text: 'Datos actualizados',
  showConfirmButton: false,
  timer: 2000
});
 redi();";
        echo "</script>";
        } else {
            # code...
               echo "<script type='text/javascript'>"; 
         echo " Swal.fire({
  title: 'SyS-Farmacia',
  icon: 'error',
  text: 'Error de actualización!',
  showConfirmButton: false,
  timer: 2000
});";
        echo "</script>";
        }
        
    }
?>