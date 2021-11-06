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
                    <h1 class="page-header"><i class="fa fa-address-card" aria-hidden="true"></i> Agregar Nuevo Venta</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div style="background-color: rgb(41, 60, 72);" class="panel-heading">
                           <h5 style="color: rgb(255, 255, 255);"><i class="fa fa-address-book-o" aria-hidden="true"></i> Gestion de Venta</h5>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <div class="col-lg-6">
                                    <label><!--<i class="fa fa-minus-square" aria-hidden="true"></i>--> N Comprobante</label>
                                            <input type="number" class="form-control" placeholder="00000" disabled>
                                        
                                    </div>
                                </div>
                                    <br></br>
                                    <br></br>
                                    <div class="form-group">
                                    <div class="col-lg-6">
                                         <label><i class="fa fa-minus-square" aria-hidden="true"></i> Cliente</label>
                                            <input class="form-control" placeholder="Nombre" disabled>
                                    </div>
                                     <div class="col-lg-6">
                                             <label><i class="fa fa-calendar" aria-hidden="true"></i> Fecha</label>
                                            <input type="date" id="fechaActual" class="form-control" placeholder="Fecha" name="fecha" id="fecha">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                  <!--  <h1>Disabled Form States</h1>-->
                                   <div class="form-group">
                                            <label><i class="fa fa-minus-square" aria-hidden="true"></i> Usuario</label>
                                            <input class="form-control" placeholder="Nombre" disabled>
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div style="background-color: rgb(255, 255, 255);" class="panel-footer">

                                         </div>
                                         <div class="form-group">
                                         <div class="col-lg-6">
                                         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ventana1">
                                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Agregar Cliente
                                                </button><br></br>
                                        </div>
                                         <div class="col-lg-6">
                                         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ventana2">
                                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Agregar Producto
                                                </button><br></br>
                                        </div>
                                    </div>
                                    
                                               <!-- Modal -->
<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background-color: rgb(50, 50, 50);" class="modal-header">
        <button style="color: rgb(255, 255, 255);" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: rgb(255, 255, 255);" class="modal-title" id="myModalLabel"><i class="fa fa-list-ul" aria-hidden="true"></i> Lista de Clientes</h4>
      </div>
      <div class="modal-body">
           <div class="form-group">
             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ventana1">
           <i class="fa fa-plus-square" aria-hidden="true"></i> Agregar Cliente
                                                </button><br></br>
        </div>

          <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example">
                                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Erik Flores</td>
                                <td>5243-6354</td>
                                <td>San Vicente</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i></button>  
                                    <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Erlinda MEnjivar</td>
                                <td>7364-9283</td>
                                <td>Ilobasco</td>
                                <td>
                                    <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i></button>  
                                    <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button> 
                                </td>
                            </tr>                
                            <tr>
                                <td>3</td>
                                <td>Bryan Abarca</td>
                                <td>7384-1823</td>
                                <td>Ilobasco</td>
                                <td>
                                    <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i></button>  
                                    <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ibin Peña</td>
                                <td>2732-1234</td>
                                <td>Cojutepeque</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i></button>  
                                    <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                </td>
                            </tr>               
                            <tr>
                                <td>5</td>
                                 <td>Maria Poca Sangre</td>
                                <td>4532-6354</td>
                                <td>San Vicente</td>
                                <td>
                                    <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i></button>  
                                    <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        </tbody>       
                                </table>
                            </div>
                            
                        </div>
      </div>
      <div  style="background-color: rgb(50, 50, 50);" class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="ventana2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div style="width:  1200px;" class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background-color: rgb(50, 50, 50);" class="modal-header">
        <button style="color: rgb(255, 255, 255);" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: rgb(255, 255, 255);" class="modal-title" id="myModalLabel"><i class="fa fa-list-ul" aria-hidden="true"></i> Lista de productos</h4>
      </div>
      <div class="modal-body">
          <div class="panel-body">
            <div class="col-lg-6">
                <div class="col-lg-6">
            <div class="form-group">
            <center></center><label><i class="fa fa-check-square-o" aria-hidden="true"></i> Por Unidad Individual</label></Center>
            <input type="checkbox" class="form-control">
        </div>
            </div>
             <div class="col-lg-6">
                 <center></center><label><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cantidad</label></Center>
                 <input type="number" class="form-control" value="1"  min="1" max="100">
             </div>
          </div>
          <div class="col-lg-6">
            <div class="col-lg-6">
               <center></center><label><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cantidad Por Unidad Indi.</label></Center>
                 <input type="number" class="form-control" placeholder="00"  min="1" max="100" disabled>
             </div>
          </div>
      </div>
          <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example">
                                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Cantidad U</th>
                                <th>Precio</th>
                                <th>Categoria</th>
                                <th>Laboratorio</th>
                                <th>tipo</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ramitidina</td>
                                <td>15</td>
                                <td>0</td>
                                 <td>1.2</td>
                                <td>Ampoya</td>
                                <td>Lopes</td>
                                <th>Ninguno</th>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i></button>  
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Granisetrol</td>
                                <td>10</td>
                                <td>100</td>
                                 <td>0.25</td>
                                <td>Bebible</td>
                                <td>Gamma</td>
                                <th>Blister</th>
                                <td>
                                    <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i></button>  
                                </td>
                            </tr>                
                            <tr>
                                <td>3</td>
                                <td>Multivitaminas Adulto</td>
                                <td>17</td>
                                <td>0</td>
                                 <td>1.2</td>
                                <td>Soluble</td>
                                <td>Generix</td>
                                <th>Ninguno</th>
                                <td>
                                    <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i></button>  
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                 <td>Sulfato Feroso</td>
                                <td>25</td>
                                <td>250</td>
                                 <td>0.15</td>
                                <td>Bebible</td>
                                <td>Latiz Pharme</td>
                                <th>Blister</th>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i></button>  
                                </td>
                            </tr>               
                            <tr>
                                <td>5</td>
                                <td>Monitor</td>
                                <td>12</td>
                                <td>0</td>
                                 <td>3.3</td>
                                <td>Ampoya</td>
                                <td>Loncasco</td>
                                <th>Ninguno</th>
                                <td>
                                    <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i></button>  
                                </td>
                            </tr>
                        </tbody>       
                                </table>
                            </div>
                            
                        </div>
      </div>
      <div  style="background-color: rgb(50, 50, 50);" class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
                                       
                                   
                                </div>

                            </div>
                                <br></br>
                           <div style="background-color: rgb(255, 255, 255);" class="panel-body">
                             <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example">
                                    <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Cantidad U</th>
                                <th>($)Precio</th>
                                <th>(%)Descuento</th>
                                <th>Sub Total</th>
                                <th>Accion</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A02BA02</td>
                                <td>Ramitidina</td>
                                <td> <input type="number" value="2"  min="1" max="100"></td>
                                
                                <td> <input type="number" value="0"  min="1" max="100"></td>
                                <td>1.2</td>
                                <td>   <input type="number" placeholder="00" ></td>
                                 <td>2.4</td>
                                <td>
                                    
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>A04AA01</td>
                                <td>Granisetrol</td>
                                <td><input type="number" value="2"  min="1" max="100"></td>
                                
                                <td><input type="number" value="20"  min="1" max="100"></td>
                                <td>0.25</td>
                                 <td><input type="number" placeholder="00" ></td>
                                 <td>0.50</td>
                                 <td>
                                    
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                </td>
                            </tr>                
                            <tr>
                                <td>Miguel Angel</td>
                                <td>Monitor</td>
                                <td><input type="number" value="1"  min="1" max="100"></td>
                                
                                <td><input type="number" value="0"  min="1" max="100"></td>
                                <td>3.3</td>
                                 <td><input type="number" placeholder="00" ></td>
                                 <td>3.3</td>
                                 <td>
                                    
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                </td>
                            </tr>
                           
                        </tbody>       
                                </table>
                            </div>
                              
                           </div>
                             <div class="panel-body">
                                  <div class="col-lg-6">
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="col-lg-6">
                                  </div>
                                   <div class="col-lg-6">
                                    <div class="col-lg-6">
                                         <label> Total ($):</label>
                                    </div>
                                    <div class="col-lg-6">
                                         <label style="color: rgb(255,0,0);"> 6.2</label>
                                    </div>
                                  </div>
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