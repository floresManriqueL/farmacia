<?php session_start();
error_reporting(0);
    if (isset($_REQUEST['id'])) {/* comprobamos si la variable que viene en la url si existe */
        # code...
        require ("../DAO/DAOEmpleado.php");
        $daoP=new DAOEmpleado();
        $id=base64_decode($_REQUEST['id']);/* desencriptamos el id recibido en la url */
        $objP=null;
        $objP=$daoP->consultaIndividual($id);
if (isset($objP)) {
          # code...
          $foto='';
          $classRemove='notBlock';
          if ($objP->getImagen()!='img_producto.jpg') {
            # code...
            $classRemove='';
            $foto='<img id="img" src="../imagenes/empleados/'.$objP->getImagen().'">';
          }
        }else{
          header("location: tb_listaempleado.php");
        }
         
    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARMACIA LA BENDICION</title>
    <!-- Core CSS - Include with every page -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo2.png">
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
    <script src="js/js_empleado.js"></script>
    <link href="css/img.css" rel="stylesheet" type="text/css" />
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
                    <h1 class="page-header"><i class="fa fa-address-card" aria-hidden="true"></i> <?php if(isset($objP)){echo "Edicion de Empleado";}else{echo "Agregar Nuevo Empleado"; }?> </h1>
                </div>
                <!--end page header -->
            </div>
              <form action="" method="post" class="form-group " id="produc" name="produc" enctype="multipart/form-data">
        <input type="hidden" name="bandera" id="bandera">
        <input type="hidden" name="baccion" id="baccion" value="<?php if(isset($objP)) echo $objP->getIdEmpleado(); ?>">
         <input type="hidden" name="foto_actual" id="foto_actual" value="<?php if(isset($objP)) echo $objP->getImagen(); ?>">
        <input type="hidden" name="foto_remove" id="foto_remove" value="<?php if(isset($objP)) echo $objP->getImagen(); ?>">
           
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
                                   <div class="form-group">
                                        <label><i class="fa fa-picture-o" aria-hidden="true"></i> Fotografia del Empleado</label>
                                        <div class="photo">
                                            <label for="foto"></label>
                                            <div class="prevPhoto">
                                            <span class="delPhoto <?php echo $classRemove; ?>">X</span>
                                            <label for="foto"></label>
                                            <?php echo $foto; ?>
                                            </div>
                                            <div class="upimg">
                                            <input type="file" name="foto" id="foto">
                                            </div>
                                            <div id="form_alert"></div>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label id="duila"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> DUI</label>
                                            <input  class="form-control validar_campos_unicos" name="dui" id="dui" type="text" value="<?php if(isset($objP)) echo $objP->getDui(); ?>" placeholder="00000000-0" autocomplete="off" data-quien_es="dui" onkeypress="return soloNumero(event)">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>

                                        <div class="form-group">
                                        <label id="til2"><i class="fa fa-list-ol" aria-hidden="true"></i> Estado Familiar</label>
                                        <select name="estadocivil" id="estadocivil" class="form-control">
                                        <option value="0">Seleccione</option>
                                        <?php
                                            if (isset($objP)) {
                                              # code...
                                              if($objP->getEstadoCivil()=="Casado"){
                                                echo "<option selected value='Casado'>Casado</option>";
                                                echo "<option value='Divorciado'>Divorciado</option>";
                                                echo "<option value='Viudo'>Viudo</option>";
                                                echo "<option value='Soltero'>Soltero</option>";
                                              }else if($objP->getEstadoCivil()=="Divorciado"){
                                                echo "<option value='Casado'>Casado</option>";
                                                echo "<option selected value='Divorciado'>Divorciado</option>";
                                                echo "<option value='Viudo'>Viudo</option>";
                                                echo "<option value='Soltero'>Soltero</option>";
                                              }else if($objP->getEstadoCivil()=="Viudo"){
                                                echo "<option value='Casado'>Casado</option>";
                                                echo "<option value='Divorciado'>Divorciado</option>";
                                                echo "<option selected value='Viudo'>Viudo</option>";
                                                echo "<option value='Soltero'>Soltero</option>";        
                                              }elseif ($objP->getEstadoCivil()=="Soltero") {
                                                echo "<option value='Casado'>Casado</option>";
                                                echo "<option value='Divorciado'>Divorciado</option>";
                                                echo "<option value='Viudo'>Viudo</option>";
                                                echo "<option selected value='Soltero'>Soltero</option>";

                                              } 

                                            }else{
                                                  # code...
                                                  echo "<option value='Casado'>Casado</option>";
                                                  echo "<option value='Divorciado'>Divorciado</option>";
                                                  echo "<option value='Viudo'>Viudo</option>";
                                                  echo "<option value='Soltero'>Soltero</option>";
                                            }
                                        ?>
                                             
                                        </select>
                                    </div>
                        
                                        <div class="form-group">
                                            <label id="naci"><i class="fa fa-calendar" aria-hidden="true"></i> Fecha Nacimiento</label>
                                            <input class="form-control" name="fechanaci" id="fechanaci" type="date" value="<?php if(isset($objP)){ echo $objP->getFechaNaci(); } else{ echo '1990-10-31'; }?>" min="1921-01-01" max="2003-10-31">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>

                                        <div class="form-group">
                                            <label id="direc"><i class="fa fa-align-center" aria-hidden="true"></i> Dirección</label>
                                            <textarea class="form-control" name="direccion" id="direccion" rows="6" autocomplete="off"><?php if(isset($objP)) echo $objP->getDireccion(); ?></textarea>
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>   

                                </div>
                                <div class="col-lg-6">
                                    <br>
                                    <div class="form-group">
                                        <label id="nom"><i class="fa fa-minus-square" aria-hidden="true"></i> Nombre</label>
                                        <input class="form-control" name="nombre" id="nombre" type="text" value="<?php if(isset($objP)) echo $objP->getNombre(); ?>" placeholder="Nombres de Empleado" autocomplete="off" onkeypress="return soloLetras(event)">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label id="apell"><i class="fa fa-minus-square" aria-hidden="true"></i> Apellido</label>
                                        <input class="form-control" name="apellido" id="apellido" type="text" value="<?php if(isset($objP)) echo $objP->getApellido(); ?>" placeholder="Apellidos de Empleado" autocomplete="off" onkeypress="return soloLetras(event)">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label id="nitla"><i class="fa fa-credit-card" aria-hidden="true"></i> NIT</label>
                                        <input class="form-control validar_campos_unicos" name="nit" id="nit" type="text" value="<?php if(isset($objP)) echo $objP->getNit(); ?>" placeholder="0000-000000-000-0" autocomplete="off" data-quien_es="nit" onkeypress="return soloNumero(event)">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                    </div>

                                    <div class="form-group">
                                        <label id="ti1"><i class="fa fa-list-ol" aria-hidden="true"></i> Género</label>
                                        <select name="genero" id="genero" class="form-control">
                                        <option value="0">Seleccione</option>
                                        <?php
                                            if (isset($objP)) {
                                              # code...
                                              if ($objP->getGenero()=="Masculino") {
                                                # code...
                                                echo "<option selected value='Masculino'>Masculino</option>";
                                                echo "<option value='Femenino'>Femenino</option>";
                                              }else if($objP->getGenero()=="Femenino"){
                                                 echo "<option selected value='Femenino'>Femenino</option>";
                                                echo "<option value='Masculino'>Masculino</option>";
                                              }                         
                                            } else {
                                              # code...
                                              echo "<option value='Masculino'>Masculino</option>";
                                              echo "<option value='Femenino'>Femenino</option>";
                                            }                   
                                        ?>
                                             
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label id="tel"><i class="fa fa-phone" aria-hidden="true"></i> Teléfono</label>
                                        <div class="form-group input-group">
                                        <span class="input-group-addon">#</span>
                                        <input class="form-control validar_campos_unicos" name="telefono" id="telefono" type="text" value="<?php if(isset($objP)) echo $objP->getTelefono(); ?>" placeholder="0000-0000" autocomplete="off" data-quien_es="telefono" onkeypress="return soloNumero(event)">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label id="corr"><i class="fa fa-envelope" aria-hidden="true"></i> Correo</label>
                                        <div class="form-group input-group">
                                        <span class="input-group-addon">@</span>
                                        <input class="form-control validar_campos_unicos" name="correo" id="correo" type="email" value="<?php if(isset($objP)) echo $objP->getCorreo(); ?>" placeholder="correo@gmail.com" autocomplete="off" data-quien_es="correo" onkeypress="return validaCorreo(event)">
                                        </div>
                                        <span id="mensajecorr"></span>
                                    </div>

                                    <div class="form-group">
                                        <label id="sal"><i class="fa fa-money" aria-hidden="true"></i> Salario</label>
                                        <div class="form-group input-group">
                                        <span class="input-group-addon">$</span>
                                        <input class="form-control" name="salario" id="salario" type="text" value="<?php if(isset($objP)) echo $objP->getSalario(); ?>" placeholder="000.00" autocomplete="off" onkeypress="return soloNumero(event)">
                                        <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div id="nomMas">
                                          <input type="hidden" name="cate" id="cate" value="<?php if(isset($objP)) echo $objP->getIdCargo(); ?>">
                                            <label id="cat" style="height: 30px;"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Cargo</label>&nbsp;&nbsp;&nbsp;
                                            <button type="button" style="height: 30px;" class="btn btn-info" data-toggle="modal" data-target="#ventana1">
                                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Seleccionar
                                                </button>
                                            <input class="form-control" name="categoria" id="categoria" placeholder="Seleccione una Cargo" value="<?php if(isset($objP)) echo $objP->getNombreCargo(); ?>" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="background-color: rgb(41, 60, 72);" class="panel-footer">
                            <button class="btn btn-success" type="button" onclick="validacion()" ><i class="fa fa-fw fa-lg fa-check-circle"></i> <?php if(isset($id)) echo "Editar"; else echo "Guardar";?> </button> &nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-primary" id="btn-cancelar" onclick="limpiar()"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</button>
                                         
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
                    <div class="table-striped">
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
                                    include "../DAO/DAOCargo.php";
                                    $daoE=new DAOCargo();
                                    $fila=$daoE->consultaAll();
                                    $contador=1;

                                    foreach ($fila as $key=> $value) {
                                      # code...
                                      echo "<tr>";
                                      echo "<td>".$contador."</td>";
                                      echo "<td>".$value->getCodigo()."</td>";
                                      echo "<td>".$value->getNombre()."</td>";
                                      echo "<td> <CENTER><button type='button' class='btn btn-info' onclick=ajax_nombreC('".base64_encode($value->getIdCargo())."')><i class='fa fa-plus-square'></i></button></CENTER> </td>";
                                      echo "</tr>";
                                      $contador++;
                                    }
                                ?>
                                
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
      <div class="col-lg-12">
                    <div class="alert alert-info">
                      <center>  <i class="fa fa-folder-open"></i><b> Copyright  © </b>2021 <b>&nbsp;FARMACIA LA BENDICION </b>
                     <b>&nbsp; </b> Reservados todos los derechos.</center>
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
 
    $nombre=(isset($_REQUEST["nombre"]))?$_REQUEST["nombre"]:"";
    $apellido=(isset($_REQUEST["apellido"]))?$_REQUEST["apellido"]:"";
    $estadofami=(isset($_REQUEST["estadocivil"]))?$_REQUEST["estadocivil"]:"";
    $nit=(isset($_REQUEST["nit"]))?$_REQUEST["nit"]:"";
    $dui=(isset($_REQUEST["dui"]))?$_REQUEST["dui"]:"";
    $sueldo=(isset($_REQUEST["salario"]))?$_REQUEST["salario"]:"";
    $direcci=(isset($_REQUEST["direccion"]))?$_REQUEST["direccion"]:"";
    $genero=(isset($_REQUEST["genero"]))?$_REQUEST["genero"]:"";
    $fechana=(isset($_REQUEST["fechanaci"]))?$_REQUEST["fechanaci"]:"";
    $correo=(isset($_REQUEST["correo"]))?$_REQUEST["correo"]:"";
    $telefono=(isset($_REQUEST["telefono"]))?$_REQUEST["telefono"]:"";
    $idcargo=(isset($_REQUEST["cate"]))?$_REQUEST["cate"]:"";
    $idfarmacia=1;
    $estadoem='Activo';



    $imgProducto=(isset($_REQUEST["foto_actual"]))?$_REQUEST["foto_actual"]:"";
    $foto_remove=(isset($_REQUEST["foto_remove"]))?$_REQUEST["foto_remove"]:"";
    //$foto=(isset($_REQUEST["img"]))?$_REQUEST["img"]:"";

    $foto_actual=$imgProducto;

    $foto=$_FILES['foto'];
    $nombrefoto=$foto['name'];
    $tipo=$foto['type'];
    $url_tempo=$foto['tmp_name'];

    //$imgProducto='img_mascota.jpg';
    
    

    if ($nombrefoto!='') {
      # code...
      $destino='../imagenes/empleados/';
      $img_nombre='img'.md5(date('Y-m-d H:m:s'));
      $imgProducto=$img_nombre.'.jpg';
      $src=$destino.$imgProducto;

    }else{
     if ($foto_actual != $foto_remove) {
        # code...
        $imgProducto='img_producto.jpg';
      }
    }


    if($bandera=="add"){
       if($imgProducto==''){
           $imgProducto='img_producto.jpg';
       }
        require_once "../DAO/DAOEmpleado.php";  
        $daoP=new DAOEmpleado();
        if ($daoP-> insertar(new ClaseEmpleado(null,$imgProducto,$nombre,$apellido,$estadofami,$nit,$dui,$sueldo,$direcci,$genero,$fechana,$correo,$telefono,$estadoem,1,$idcargo))==1) {  
           if ($nombrefoto!='') {
              # code...
              move_uploaded_file($url_tempo, $src); 
            }
            
            echo "<script type='text/javascript'>"; 
            echo " Swal.fire({
              title: 'SyS-Farmacia',
              icon: 'success',
              text: 'Datos almacenados',
              showConfirmButton: false,
              timer: 20000
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
        require_once "../DAO/DAOEmpleado.php"; 
        $daoP=new DAOEmpleado();
        if ($daoP->actualizar(new ClaseEmpleado($baccion,$imgProducto,$nombre,$apellido,$estadofami,$nit,$dui,$sueldo,$direcci,$genero,$fechana,$correo,$telefono,$estadoem,1,$idcargo))==1) {
            # code...
            if ($nombrefoto!='') {
              # code...
              move_uploaded_file($url_tempo, $src); 
            }
            if (($nombrefoto!='' && $foto_actual !='img_mascota.jpg') || ($foto_actual!=$foto_remove)) {
              # code...
              unlink('../imagenes/uploads/'.$foto_actual);
            }
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