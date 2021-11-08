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
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo2.png">
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

     <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>
     <script src="js/js_empleado.js"></script>
      <script type="text/javascript">
        function mandarId1(id) {
            location.href = "fm_empleado.php?id=" + id;
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
                    <h1 class="page-header"><i class="fa fa-th" aria-hidden="true"></i> Lista de Empleados</h1>
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
                             <h5 style="color: rgb(255, 255, 255);"><i class="fa fa-table" aria-hidden="true"></i> Gestion de Producto</h5>
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
                                        <th>Teléfono</th>
                                        <th>Salario</th>
                                        <th>Cargo</th>
                                        <th>Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                                                    <?php
                                        include "../DAO/DAOEmpleado";
                                        $daoE=new DAOEmpleado();
                                        $fila=$daoE->consultaAllSinUsario();
                                        $com=$daoE->consultaAllConUsuario();
                                        $contador=1;
                                        
                                        foreach ($fila as $key=> $value) {
                                   $img='../imagenes/empleados/'.$value->getImagen();
                                  # code...
                                  echo "<tr>";
                                  echo "<td>".$contador."</td>";
                                  echo "<td class='img_prod'> <img src='".$img."' alt='".$value->getNombre()."'></td>";
                                  echo "<td>".$value->getDui()."</td>";
                                  echo "<td>".$value->getNombre()." ".$value->getApellido()."</td>";
                                  echo "<td>".$value->getTelefono()."</td>";
                                  echo "<td> $ ".$value->getSalario()."</td>";
                                  echo "<td>".$value->getNombreCargo()."</td>";   
                                  echo "<td><CENTER><button title='Editar' type='button' class='btn btn-info' onclick=mandarId('".base64_encode($value->getIdEmpleado())."')><i class='fa fa-pencil'></i></button> <button title='Eliminar' type='button' class='btn btn-danger' onclick=showConfirmMessage('".$value->getIdEmpleado()."')><i class='fa fa-trash'></i>  </button>&nbsp;<button title='Ver' type='button' id='verpro' class='btn btn-success' data-toggle='modal' data-target='#ventana'  onclick=ver('".$value->getIdEmpleado()."')><i class='fa fa-eye' aria-hidden='true'></i></button></CENTER></td>";
                                        echo "</tr>";
                                  $contador++;
                                }

                                foreach ($com as $key=> $value) {
                                   $img='../imagenes/empleados/'.$value->getImagen();
                                  # code...
                                  echo "<tr>";
                                  echo "<td>".$contador."</td>";
                                  echo "<td class='img_prod'> <img src='".$img."' alt='".$value->getNombre()."'></td>";
                                  echo "<td>".$value->getDui()."</td>";
                                  echo "<td>".$value->getNombre()." ".$value->getApellido()."</td>";
                                  echo "<td>".$value->getTelefono()."</td>";
                                  echo "<td> $ ".$value->getSalario()."</td>";
                                  echo "<td>".$value->getNombreCargo()."</td>";   
                                  echo "<td><CENTER><button title='Editar' type='button' class='btn btn-info' onclick=mandarId('".base64_encode($value->getIdEmpleado())."')><i class='fa fa-pencil'></i></button> <button title='Eliminar' type='button' class='btn btn-danger' onclick=showConfirm('".$value->getIdEmpleado()."')><i class='fa fa-trash'></i>  </button>&nbsp;<button title='Ver' type='button' id='verpro' class='btn btn-success' data-toggle='modal' data-target='#ventana'  onclick=ver('".$value->getIdEmpleado()."')><i class='fa fa-eye' aria-hidden='true'></i></button></CENTER></td>";
                                        echo "</tr>";
                                  $contador++;
                                }
                                    ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="background-color: rgb(41, 60, 72);" class="panel-footer">
                          <button type='button' class='btn btn-success' onclick='redirec()'><i class="fa fa-plus-square" aria-hidden="true"></i> &nbsp; Agregar Nuevo Empleado</button>        
                        </div>
                    </div>
        
<div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div style="width:  1100px;" class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background-color: rgb(50, 50, 50);" class="modal-header">
        <button style="color: rgb(255, 255, 255);" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: rgb(255, 255, 255);" class="modal-title" id="myModalLabel"><i class="fa fa-list-ul" aria-hidden="true"></i> Informacion Completa del Empleado.</h4>
      </div>
      <div class="modal-body">
          <div class="panel-body">
                     <div id="verMas">                    
                     </div>
          </div>
      </div>
      <div  style="background-color: rgb(50, 50, 50);" class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i> Cerrar</button>
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

    if ($bandera=="delete") {
        # code...
        require_once "../DAO/DAOEmpleado.php";
        $daoE=new DAOEmpleado();
        if ($daoE->eliminar($baccion)==1) {
            echo "<script type='text/javascript'>"; 
             echo " Swal.fire({
              title: 'SyS-Farmacia',
              icon: 'success',
              text: 'Registro Eliminado (- o)',
              showConfirmButton: false,
              timer: 3000
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