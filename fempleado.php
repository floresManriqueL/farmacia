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
                    <h1 class="page-header"><i class="fa fa-address-card" aria-hidden="true"></i> Agregar Nuevo Empleado</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div style="background-color: rgb(41, 60, 72);" class="panel-heading">
                           <h5 style="color: rgb(255, 255, 255);"><i class="fa fa-address-book-o" aria-hidden="true"></i> Gestion de Empleado</h5>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                         <div class="form-group">
                                            <label><i class="fa fa-list-ol" aria-hidden="true"></i> Farmacia</label>
                                            <select class="form-control">
                                                <option>Seleccione</option>
                                                <option>Farmacia la Bendicion</option>
                                                <option>Farmacia Sagrada Familia</option>
                                                <option>Farmacia Jesus</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-minus-square" aria-hidden="true"></i> Nombre</label>
                                            <input class="form-control" placeholder="Nombre Completo">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                         <div class="form-group">
                                            <label><i class="fa fa-minus-square" aria-hidden="true"></i> Apellido</label>
                                            <input class="form-control" placeholder="Ingrese su Apellido">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                         <div class="form-group">
                                            <label><i class="fa fa-list-ol" aria-hidden="true"></i> Estado Civil</label>
                                            <select class="form-control">
                                                <option>Seleccione</option>
                                                <option>Soltero</option>
                                                <option>Casodo</option>
                                                <option>Divorciado</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-credit-card" aria-hidden="true"></i> Numero de NIT</label>
                                            <input class="form-control" placeholder="0000-000000-000-0">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Numero de DUI</label>
                                            <input class="form-control" placeholder="00000000-0">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-usd" aria-hidden="true"></i> Salario</label>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control" placeholder="300.00">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-picture-o" aria-hidden="true"></i> Imagen</label>
                                             <input type="file">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                  <!--  <h1>Disabled Form States</h1>-->
                                    <form role="form">
                                       
                                            <div class="form-group">
                                                <label for="disabledSelect"><i class="fa fa-outdent" aria-hidden="true"></i> Cargo</label> 
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ventana1">
                                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Seleccionar
                                                </button><br></br>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Seleccione un Cargo" disabled>
                                                 </input>
                                            </div>
                                             <div class="form-group">
                                            <label><i class="fa fa-list-ol" aria-hidden="true"></i> Genero</label>
                                            <select class="form-control">
                                                <option>Seleccione</option>
                                                <option>MASCULINO</option>
                                                <option>FEMENINO</option>
                                                <option>OTROS</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-map-marker" aria-hidden="true"></i> Direccion</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-calendar" aria-hidden="true"></i> Fecha de Nacimiento</label>
                                            <input type="date" class="form-control" placeholder="Fecha" name="fecha" id="fecha">
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-location-arrow" aria-hidden="true"></i> Correo</label>
                                            <input class="form-control" placeholder="fl17007@gmail.com">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                         <div class="form-group">
                                            <label><i class="fa fa-phone-square" aria-hidden="true"></i> Telefono</label>
                                            <input class="form-control" placeholder="0000-0000">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                               <!-- Modal -->
<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background-color: rgb(50, 50, 50);" class="modal-header">
        <button style="color: rgb(255, 255, 255);" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: rgb(255, 255, 255);" class="modal-title" id="myModalLabel"><i class="fa fa-list-ul" aria-hidden="true"></i> Lista de Cargos</h4>
      </div>
      <div class="modal-body">
          <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example">
                                    <thead>
                            <tr>
                                <th>ID-CARGO</th>
                                <th>Cargo</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Vendedor</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Contador</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>                
                            <tr>
                                <td>3</td>
                                <td>Administrador</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Contador</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>               
                            <tr>
                                <td>5</td>
                                <td>Software Engineer</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Operador</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Support Engineer</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Developer</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Ordenansa</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Data Coordinator</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Operador</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Administrador</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Junior Javascript Developer</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Sales Assistant</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Regional Director</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Systems Administrator</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Developer</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Regional Director</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Javascript Developer</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Customer Support</td>
                                <td>
                                   <button type="button" class="btn btn-primary"><i class="fa fa-outdent"></i> Seleccionar</button>  
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
    </script>
     
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    
</body>

</html>
