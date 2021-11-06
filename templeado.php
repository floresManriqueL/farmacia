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
                                <table class="table table-striped table-bordered table-hover" id="example">
                                    <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>Direccion</th>
                                <th>Año de N</th>
                                <th>$ Salario</th>
                                <th>Estado</th>
                                <th>NIT</th>
                                <th>DUI</th>
                                <th>Genero</th>
                                <th>Telefono</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Juan Carlos</td>
                                <td>Administrador</td>
                                <td>San vicente</td>
                                
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>Soltero</td>
                                 <td>7263-635462-354-2</td>
                                  <td>73649283-3</td>
                                   <td>Masculino</td>
                                    <td>2736-4759</td>
                                <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Carlos Alberto</td>
                                <td>Contador</td>
                                <td>Cabañas</td>
                                
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                                 <td>Casado</td>
                                 <td>2343-635467-354-5</td>
                                  <td>62837652-3</td>
                                   <td>Masculino</td>
                                    <td>7465-4759</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>                
                            <tr>
                                <td>Miguel Angel</td>
                                <td>Vendedor</td>
                                <td>Culcatlan</td>
                                
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                                 <td>Soltero</td>
                                 <td>3456-123456-354-4</td>
                                  <td>56456422-3</td>
                                   <td>Masculino</td>
                                    <td>4534-7867</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Carlos Antonio</td>
                                <td>Contador</td>
                                <td>Ilobasco</td>
                                
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                                 <td>Soltero</td>
                                 <td>7263-635462-354-2</td>
                                  <td>73649283-3</td>
                                   <td>Masculino</td>
                                    <td>2736-4759</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>               
                            <tr>
                                <td>Victor Manuel</td>
                                <td>Vendedor</td>
                                <td>San vicente</td>
                                
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                                 <td>Divorciado</td>
                                 <td>7654-987654-354-2</td>
                                  <td>34545678-3</td>
                                   <td>Masculino</td>
                                    <td>2736-2345</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Julio Cesar</td>
                                <td>Administrador</td>
                                <td>Tejutepeque</td>
                                
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                                 <td>casado</td>
                                 <td>7263-345643-564-2</td>
                                  <td>16273845-3</td>
                                   <td>Masculino</td>
                                    <td>2345-4759</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Jorge Alberto</td>
                                <td>Vendedor</td>
                                <td>Ilobasco</td>
                                
                                <td>2009/08/19</td>
                                <td>$139,575</td>
                                <td>casado</td>
                                 <td>2234-345643-234-2</td>
                                  <td>23453454-3</td>
                                   <td>Masculino</td>
                                    <td>2352-4759</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Jose Luis</td>
                                <td>Bultero</td>
                                <td>Ilobasco</td>
                                
                                <td>2013/08/11</td>
                                <td>$98,540</td>
                                 <td>Divorciado</td>
                                 <td>2345-345643-234-1</td>
                                  <td>23453454-5</td>
                                   <td>Masculino</td>
                                    <td>2352-2345</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Jose Roberto</td>
                                <td>Contador</td>
                                <td>San Francisco</td>
                                
                                <td>2009/07/07</td>
                                <td>$87,500</td>
                                 <td>Soltero</td>
                                 <td>4567-123456-321-1</td>
                                  <td>23453454-9</td>
                                   <td>Masculino</td>
                                    <td>3456-2345</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Marco Antonio</td>
                                <td>Vendedor</td>
                                <td>Cuscatlan</td>
                                
                                <td>2012/04/09</td>
                                <td>$138,575</td>
                                <td>Soltero</td>
                                 <td>4567-534678-321-1</td>
                                  <td>23453454-0</td>
                                   <td>Masculino</td>
                                    <td>1234-2345</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Laura Velez</td>
                                <td>Administrador</td>
                                <td>Ilobasco</td>
                                
                                <td>2010/01/04</td>
                                <td>$125,250</td>
                                <td>Casado</td>
                                 <td>3455-534678-234-4</td>
                                  <td>16273890-2</td>
                                   <td>Femenino</td>
                                    <td>2536-2345</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Antonio Flores</td>
                                <td>Operador</td>
                                <td>San Francisco</td>
                               
                                <td>2012/06/01</td>
                                <td>$115,000</td>
                                 <td>Casado</td>
                                 <td>2345-123456-234-6</td>
                                  <td>16273890-7</td>
                                   <td>Masculino</td>
                                    <td>1234-2345</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Maria Menjivar</td>
                                <td>Vendedor</td>
                                <td>Ilobasco</td>
                               
                                <td>2013/02/01</td>
                                <td>$75,650</td>
                                 <td>Soltera</td>
                                 <td>2345-234567-234-6</td>
                                  <td>78965758-7</td>
                                   <td>Femenino</td>
                                    <td>8797-6547</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Cesar Oreyana</td>
                                <td>Ordenansa</td>
                                <td>San Vicente</td>
                               
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                                 <td>Divorciado</td>
                                 <td>1234-234567-234-0</td>
                                  <td>12345678-7</td>
                                   <td>Masculino</td>
                                    <td>1234-6547</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Erik Flores</td>
                                <td>Ordenansa</td>
                                <td>Ilobasco</td>
                               
                                <td>2011/03/21</td>
                                <td>$356,250</td>
                                <td>Soltero</td>
                                 <td>3456-654342-345-3</td>
                                  <td>76543289-2</td>
                                   <td>Masculino</td>
                                    <td>5467-6547</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Rodrigo Arevalo</td>
                                <td>Vendedor</td>
                                <td>Cabañas</td>
                               
                                <td>2009/02/27</td>
                                <td>$103,500</td>
                                <td>Soltero</td>
                                 <td>3456-234567-345-3</td>
                                  <td>76543289-1</td>
                                   <td>Masculino</td>
                                    <td>5467-2345</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Bryan Abarca</td>
                                <td>Vendedor</td>
                                <td>San Francisco</td>
                               
                                <td>2010/07/14</td>
                                <td>$86,500</td>
                                <td>Soltero</td>
                                 <td>1234-234567-1234-7</td>
                                  <td>62734898-1</td>
                                   <td>Masculino</td>
                                    <td>1234-2345</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ricarto Pocasangre</td>
                                <td>Operador</td>
                                <td>Ilobasco</td>
                                
                                <td>2008/11/13</td>
                                <td>$183,000</td>
                                 <td>Casado</td>
                                 <td>3453-234545-1234-7</td>
                                  <td>62734898-1</td>
                                   <td>Masculino</td>
                                    <td>1234-2348</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Andrena Peña</td>
                                <td>Vendedor</td>
                                <td>San Vicente</td>
                               
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                                <td>Casado</td>
                                 <td>2536-234523-2345-7</td>
                                  <td>62734898-1</td>
                                   <td>Femenino</td>
                                    <td>6354-2348</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Gissel Bonilla</td>
                                <td>Administrador</td>
                                <td>Ilobasco</td>
                                
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                                <td>Divorciada</td>
                                 <td>2344-234235-1234-7</td>
                                  <td>62734898-5</td>
                                   <td>Femenina</td>
                                    <td>6789-3456</td>
                                 <td>
                                     <button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                                       <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </td>
                            </tr>
                        </tbody>       
                                </table>
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
