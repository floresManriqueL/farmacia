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
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo2.png">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

     <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>
     <script src="js/js_usuario.js"></script>
      <script type="text/javascript">
        function mandarId1(id) {
        location.href = "fm_usuario.php?id=" + id;
    }
       </script>
     <style type="text/css">
      .img_prod img{
        width: 70px;
        height: 70px;
        margin: auto; 
      }
    </style>
   </head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
         <?php include"menu.php";?>
        <!-- navbar top -->
        
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div  style="background-color: rgb(150, 150, 150);" id="page-wrapper">

             <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-th" aria-hidden="true"></i> Lista de Cuentas de Usuario.</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <form action="" method="post" class="form-group" id="farma" name="farma">
                       <input type="hidden" name="bandera" id="bandera">
                       <input type="hidden" name="baccion" id="baccion">
                    <div class="panel panel-default">
                        
                         <div  style="background-color: rgb(41, 60, 72);" class="panel-heading">
                             <h5 style="color: rgb(255, 255, 255);"><i class="fa fa-table" aria-hidden="true"></i> Gestion de Cuentas.</h5>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                               <table class="table table-striped table-bordered table-hover" id="example">
                                    <thead>
                            <tr>
                                <th>Corr</th>
                                <th>Foto</th>
                                <th>DUI</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Tipo</th>
                                <th>Estado</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                             <?php
                    require_once "../DAO/DAOUsuario.php";
                    $daoE=new DAOUsuario();
                    $fila=$daoE->consultaAll();
                    $contador=1;

                    foreach ($fila as $key=> $value) {
                       $img='../imagenes/empleados/'.$value->getImagenEmpleado();
                      # code...
                      echo "<tr>";
                      echo "<td>".$contador."</td>";
                      echo "<td class='img_prod'> <img src='".$img."' alt='".$value->getNombreEmpleado()."'></td>";
                      echo "<td>".$value->getDuiEmpleado()."</td>";
                      echo "<td>".$value->getNombreEmpleado()." ".$value->getApellidoEmpleado()."</td>";
                      echo "<td>".$value->getCorreoEmpleado()."</td>";
                      echo "<td>".$value->getTipo()."</td>";
                       if($value->getEstado() == "Activo"){
                       echo "<td style='color: rgb(27,167,16);''>".$value->getEstado()."</td>";
                        }else{
                          echo "<td style='color: rgb(255, 0, 0);'>".$value->getEstado()."</td>";
                        }
                          if($value->getEstado() == "Activo"){
                                echo "<td><CENTER><button type='button' title='Eliminar' class='btn btn-danger' onclick=showConfirmMessage('".$value->getIdUsuario()."')><i class='fa fa-trash'></i></button>&nbsp;<button type='button' class='btn btn-outline btn-danger' title='Inactivar' onclick=inactivar1('".$value->getIdUsuario()."')><i class='fa fa-dot-circle-o'></i></button></CENTER></td>";
                          }else{
                                echo "<td><CENTER><button type='button' title='Eliminar' class='btn btn-danger' onclick=showConfirmMessage('".$value->getIdUsuario()."')><i class='fa fa-trash'></i>  </button>&nbsp;<button type='button' class='btn btn-outline btn-primary' title='Activar' onclick=activar1('".$value->getIdUsuario()."')><i class='fa fa-bullseye'></i></button></button></CENTER></td>";
                          }
                          echo "</tr>";
                      $contador++;
                    }
                  ?>
                        </tbody>       
                                </table>
                            </div>
                        </div>
                       
                    </div>
        
<div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div style="width:  1100px;" class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background-color: rgb(50, 50, 50);" class="modal-header">
        <button style="color: rgb(255, 255, 255);" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: rgb(255, 255, 255);" class="modal-title" id="myModalLabel"><i class="fa fa-list-ul" aria-hidden="true"></i> Caracteristicas del Productos</h4>
      </div>
      <div class="modal-body">
          <div class="panel-body">
                     <div id="verMas">                    
                     </div>
          </div>
      </div>
      <div  style="background-color: rgb(50, 50, 50);" class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
  </form>    
                </div>
                 <div class="col-lg-12">
                    <div class="alert alert-info">
                      <center>  <i class="fa fa-folder-open"></i><b> Copyright  © </b>2021 <b>&nbsp;FARMACIA LA BENDICION </b>
        <b>&nbsp; </b> Reservados todos los derechos.</center>
                    </div>
                </div>
            </div>
          
        </div>

    </div>
    <!-- end wrapper -->

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
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="../main.js"></script>  
</body>

</html>
<?php 
    $bandera=(isset($_REQUEST["bandera"]))?$_REQUEST["bandera"]:"";
    $baccion=(isset($_REQUEST["baccion"]))?$_REQUEST["baccion"]:"";
     $idw1=(isset($_REQUEST["ids"]))?$_REQUEST["ids"]:"";
     $activr = "Activo";
     $activr1 = "Inactivo";
     if($bandera=="activ"){
         require_once "../DAO/DAOUsuario.php";
        $daoE1=new DAOUsuario();
        if ($daoE1->inactivar($baccion,$activr)==1) {
           echo "<script type='text/javascript'>"; 
         echo " Swal.fire({
          title: 'SyS-Farmacia',
          icon: 'success',
          text: 'Registro Actualizado',
          showConfirmButton: false,
          timer: 2000
        });
        redi();";
                echo "</script>";
                    # code...
                } else {
                  echo "<script type='text/javascript'>"; 
                 echo " Swal.fire({
          title: 'SyS-Farmacia',
          icon: 'error',
          text: 'Error al Actualizar',
          showConfirmButton: false,
          timer: 2000
        });";
        echo "</script>";
            # code...
        }
     }
     if($bandera=="inacti"){
      require_once "../DAO/DAOUsuario.php";
        $daoE2=new DAOUsuario();
        if ($daoE2->inactivar($baccion,$activr1)==1) {
           echo "<script type='text/javascript'>"; 
         echo " Swal.fire({
          title: 'SyS-Farmacia',
          icon: 'success',
          text: 'Registro Actualizado',
          showConfirmButton: false,
          timer: 2000
        });
        redi();";
                echo "</script>";
                    # code...
                } else {
                  echo "<script type='text/javascript'>"; 
                 echo " Swal.fire({
          title: 'SyS-Farmacia',
          icon: 'error',
          text: 'Error al Actualizar',
          showConfirmButton: false,
          timer: 2000
        });";
        echo "</script>";
            # code...
        }
     }

    if ($bandera=="delete") {
        # code...
        require_once "../DAO/DAOUsuario.php";
        $daoE=new DAOUsuario();
        if ($daoE->eliminar($baccion)==1) {
           echo "<script type='text/javascript'>"; 
         echo " Swal.fire({
          title: 'SyS-Farmacia',
          icon: 'success',
          text: 'Registro Eliminado (- o)',
          showConfirmButton: false,
          timer: 2000
        });
        redi();";
                echo "</script>";
                    # code...
                } else {
                  echo "<script type='text/javascript'>"; 
                 echo " Swal.fire({
          title: 'SyS-Farmacia',
          icon: 'error',
          text: 'Error al eliminar los datos',
          showConfirmButton: false,
          timer: 2000
        });";
        echo "</script>";
            # code...
        }

    } 
    
?>