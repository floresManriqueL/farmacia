<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARMACIA LA BENDICION</title>
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
     <script src="js/js_categoria.js"></script>
      <script language="javascript">

  
    </script>
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
                    <div class="panel panel-default">
                        <div  style="background-color: rgb(41, 60, 72);" class="panel-heading">
                             <h5 style="color: rgb(255, 255, 255);"><i class="fa fa-table" aria-hidden="true"></i> Gestion de Empleados</h5>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                  <form action="" method="post" class="form-group" id="farma" name="farma">
              <input type="hidden" name="bandera" id="bandera">
              <input type="hidden" name="baccion" id="baccion" >
                                <table class="table table-striped table-bordered table-hover" id="example">
                                    <thead>
                            <tr>
                                 <th>Corr</th>
                                <th>Codigo</th>
                                 <th>Nombre</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                             <?php
                    include "../DAO/DAOCategoria.php";
                    $daoE=new DAOCategoria();
                    $fila=$daoE->consultaAll();
                    $contador=1;

                    foreach ($fila as $key=> $value) {
                      # code...
                      echo "<tr>";
                      echo "<td>".$contador."</td>";
                      echo "<td>".$value->getCodigo()."</td>";
                      echo "<td>".$value->getNombre()."</td>";
                      echo "<td><button type='button' class='btn btn-info' onclick=mandarId('".base64_encode($value->getIdCategoria())."')><i class='fa fa-pencil'></i></button> <button type='button' class='btn btn-danger' onclick=showConfirmMessage('".$value->getIdCategoria()."')><i class='fa fa-trash'></i>  </button></td>";
                      echo "</tr>";
                      $contador++;
                    }
                  ?>
                        </tbody>       
                                </table>
                                 </form>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                     <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                      <center>  <i class="fa fa-folder-open"></i><b> Copyright  © </b>2021 <b>&nbsp;FARMACIA LA BENDICION </b>
        <b>&nbsp; </b> Reservados todos los derechos.</center>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
                </div>
            </div>
         
                    <!--  end  Context Classes  -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/formulario.js"></script>
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

    if ($bandera=="delete") {
        # code...
        require_once "../DAO/DAOCategoria.php";
        $daoE=new DAOCategoria();
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