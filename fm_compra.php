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
       <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

     <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>


</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->      
     <?php include"menu.php";?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
          <div style="background-color: rgb(150, 150, 150);" id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-address-card" aria-hidden="true"></i> Agregar Nuevo Compra</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div style="background-color: rgb(41, 60, 72);" class="panel-heading">
                           <h5 style="color: rgb(255, 255, 255);"><i class="fa fa-address-book-o" aria-hidden="true"></i> Gestion de Compra</h5>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label><button type="button" class="btn btn-info" data-toggle="modal" data-target="#ventana1">
                                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Seleccionar Producto
                                                </button><br></br> </label>
                                            <input class="form-control" placeholder="Nombre" disabled>
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                         <div class="form-group">
                                            <label><i class="fa fa-minus-square" aria-hidden="true"></i> Cantidad</label>
                                            <input type="number" class="form-control" placeholder="00">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                         <div class="form-group">
                                            <label><i class="fa fa-calendar" aria-hidden="true"></i> Fecha de Vencimiento</label>
                                            <input type="date" class="form-control" placeholder="Fecha" name="fecha" id="fecha">
                                        </div>
                                    
                                </div>
                                <div class="col-lg-6">
                                  <!--  <h1>Disabled Form States</h1>-->
                                    <form role="form">
                                        <div class="form-group">
                                            <label><i class="fa fa-minus-square" aria-hidden="true"></i> Precio de compra</label>
                                            <input type="number" class="form-control" placeholder="00.0">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                         <div class="form-group">
                                            <label><i class="fa fa-minus-square" aria-hidden="true"></i> Lote</label>
                                            <input type="number" class="form-control" placeholder="00">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                         <label><button type="button" class="btn btn-info" data-toggle="modal" data-target="#ventana1">
                                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Detalle compra
                                        </button><br></br> </label>
                                           
                                               <!-- Modal -->
<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background-color: rgb(50, 50, 50);" class="modal-header">
        <button style="color: rgb(255, 255, 255);" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: rgb(255, 255, 255);" class="modal-title" id="myModalLabel"><i class="fa fa-list-ul" aria-hidden="true"></i> Detalles de compra</h4>
      </div>
      <div class="modal-body">
          <div class="panel-body">
                    <div class="col-lg-6">
                       <div class="form-group">
                                            <label><button type="button" class="btn btn-info" data-toggle="modal" data-target="#ventana1">
                                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Seleccionar Proveedor
                                                </button><br></br> </label>
                                            <input class="form-control" placeholder="Nombre" disabled>
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-minus-square" aria-hidden="true"></i> Codigo Factura</label>
                                            <input class="form-control" placeholder="Nombre Completo">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                    </div>
                    <div class="col-lg-6">
                          <div class="form-group">
                                            <label><i class="fa fa-calendar" id="fechaActual" aria-hidden="true"></i> Fecha de Compra</label>
                                            <input type="date" id="fechaActual" class="form-control" placeholder="Fecha" name="fecha" id="fecha">
                                        </div>
                                         <div class="form-group">
                                            <label><i class="fa fa-list-ol" aria-hidden="true"></i> Tipo de Compra</label>
                                            <select class="form-control">
                                                <option>Contado</option>
                                                <option>Credito</option>
                                            </select>
                         </div>
                    </div>       
                            
         </div>
      </div>
      <div  style="background-color: rgb(50, 50, 50);" class="modal-footer">
         <button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> Agregar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
                                       
                                    </form>
                                   
                                </div>

                            </div>
                            <div style="background-color: rgb(41, 60, 72);" class="panel-footer">
                                        <button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> Guardar</button>
                                        <button type="button" class="btn btn-primary" id="btn-cancelar"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</button>
                                         <script type="text/javascript">
                                            document.getElementById("btn-cancelar").onclick = function () {
                                            location.href = "fempleado.php";
                                          };
                                         </script>
                            </div>
                        </div>

                    </div>
                     <!-- End Form Elements -->
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
        </div>
        <!-- end page-wrapper -->


    </div>
    <!-- end wrapper -->


    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
     <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
        window.onload = function(){
  var fecha = new Date(); //Fecha actual
  var mes = fecha.getMonth()+1; //obteniendo mes
  var dia = fecha.getDate(); //obteniendo dia
  var ano = fecha.getFullYear(); //obteniendo año
  if(dia<10)
    dia='0'+dia; //agrega cero si el menor de 10
  if(mes<10)
    mes='0'+mes //agrega cero si el menor de 10
  document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;
}
    </script>
     
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    
</body>

</html>
