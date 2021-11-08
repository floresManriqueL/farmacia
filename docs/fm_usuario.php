<?php session_start();
error_reporting(0);
    if (isset($_REQUEST['id'])) {/* comprobamos si la variable que viene en la url si existe */
        # code...
        require ("../DAO/DAOUsuario.php");
        $daoP=new DAOUsuario();
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
    <script src="js/js_usuario.js"></script>
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
                    <h1 class="page-header"><i class="fa fa-address-card" aria-hidden="true"></i> <?php if(isset($objP)){echo "Edicion de Cuentas de Usuario.";}else{echo "Agregar Nueva Cuenta Usuario."; }?> </h1>
                </div>
                <!--end page header -->
            </div>
            <form action="" method="post" class="form-group " id="farma" name="farma" enctype="multipart/form-data">
        <input type="hidden" name="bandera" id="bandera">
        <input type="hidden" name="baccion" id="baccion" value="<?php if(isset($objP)) echo $objP->getIdUsuario(); ?>">
         <input type="hidden" name="foto_actual" id="foto_actual" value="<?php if(isset($objP)) echo $objP->getImagen(); ?>">
        <input type="hidden" name="foto_remove" id="foto_remove" value="<?php if(isset($objP)) echo $objP->getImagen(); ?>">
           
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       <div style="background-color: rgb(41, 60, 72);" class="panel-heading">
                           <h5 style="color: rgb(255, 255, 255);"><i class="fa fa-address-book-o" aria-hidden="true"></i> Gestion de Cuentas.</h5>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <div id="nomMas">
                                          <input type="hidden" name="cate" id="cate" value="<?php if(isset($objP)) echo $objP->getIdEmpleado(); ?>">
                                            <label id="cat" style="height: 30px;"><i class="fa fa-user"  aria-hidden="true"></i> Empleado</label>&nbsp;&nbsp;&nbsp;
                                            <button type="button" style="height: 30px;" class="btn btn-info" data-toggle="modal" data-target="#ventana1">
                                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Seleccionar
                                                </button>
                                            <input class="form-control" name="categoria" id="categoria" placeholder="Seleccione un Empleado" value="<?php if(isset($objP)) echo $objP->getNombreEmpleado(); ?>" disabled="disabled">
                                        </div>
                                    </div>
                                        <br>
                                        <div class="form-group">
                                            <label id="pass"><i class="fa fa-unlock" aria-hidden="true"></i> Contraseña</label>
                                            <input class="form-control"  minlength="8" name="clave" id="clave" type="password" value="<?php if(isset($objP)) echo $objP->getClave(); ?>" placeholder="Escriba Contraseña" autocomplete="off">
                                            <span id="mensajespan" >Utilizar Mayusculas, Minusculas, Digitos y (#%&*). </span>
                                           <!-- style="opacity: 0.5;"<p class="help-block">Example block-level help text here.</p>-->
                                        </div>

                                    <div class="form-group">
                                        <label id="rol"><i class="fa fa-list-ol" aria-hidden="true"></i> Tipo de Cuenta</label>
                                        <select name="roles" id="roles" class="form-control">
                                        <option value="0">Seleccione</option>
                                        <?php
                                            if (isset($objP)) {
                                              # code...
                                              if($objP->getEstadoCivil()=="Administrador"){
                                                echo "<option selected value='Administrador'>Administrador</option>";
                                                echo "<option value='Empleado'>Empleado</option>";
                                              }else if($objP->getEstadoCivil()=="Empleado"){
                                                echo "<option value='Administrador'>Administrador</option>";
                                                echo "<option selected value='Empleado>Empleado</option>";
                                              } 

                                            }else{
                                                  # code...
                                                  echo "<option value='Administrador'>Administrador</option>";
                                                  echo "<option value='Empleado'>Empleado</option>";
                                            }
                                        ?>
                                             
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label id="nom"><i class="fa fa-minus-square" aria-hidden="true"></i> Nombre de Usuario</label>
                                        <input class="form-control validar_campos_unicos"  name="nombre" id="nombre" type="text" value="<?php if(isset($objP)) echo $objP->getNombre(); ?>" minlength="5" placeholder="Usuario" autocomplete="off" data-quien_es="usser" onkeypress="return validaNombreUsuario(event)">
                                        <span id="mensajeussr">Solo letras, numeros y ( . _ - ).</span>
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label id="pass2"><i class="fa fa-unlock" aria-hidden="true"></i> Confirmar Contraseña</label>
                                        <input class="form-control" name="reclave" id="reclave" type="password" value="<?php if(isset($objP)) echo $objP->getClave(); ?>" minlength="8" placeholder="Repetir Contraseña" autocomplete="off" disabled>
                                        <span id="mensajespp">La Contraseña debe ser Igual.</span>
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                    
                                    <div class="form-group">
                                        <label id="est"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Estado</label>
                                        <br>
                                        <?php 
                                          if (isset($objP)) {
                                            # code...
                                            if ($objP->getEstado()=="Activo") {
                                              # code...
                                              echo "<label class='radio-inline'>";
                                              echo "<input type='radio' name='estado' id='estado' value='Activo' checked>Activo";
                                              echo "</label>";

                                              echo "<label class='radio-inline'>";
                                              echo "<input type='radio' name='estado' id='estado' value='Inactivo'>Inactivo";
                                              echo "</label>";
                                            }else{
                                              # code..
                                              echo "<label class='radio-inline'>";
                                              echo "<input type='radio' name='estado' id='estado' value='Activo' >Activo";
                                              echo "</label>";

                                              echo "<label class='radio-inline'>";
                                              echo "<input type='radio' name='estado' id='estado' value='Inactivo' checked>Inactivo";
                                              echo "</label>";
                                            }
                                          }else {
                                            # code...
                                            echo "<div class='radio'><label>";
                                              echo "<input type='radio' name='estado' id='estado' value='Activo' checked disabled>Activo";
                                              echo "</label></div>";

                                              echo "<div class='radio'><label>";
                                              echo "<input type='radio' name='estado' id='estado' value='Inactivo'disabled>Inactivo";
                                              echo "</label></div>";
                                          }
                                      ?> 
                                    </div>  
                                </div>
                            </div>
                        </div>
<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div style="background-color: rgb(50, 50, 50);" class="modal-header">
                    <button style="color: rgb(255, 255, 255);" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 style="color: rgb(255, 255, 255);" class="modal-title" id="myModalLabel"><i class="fa fa-list-ul" aria-hidden="true"></i> Lista de Empleados</h4>
                </div>

            <div class="modal-body">
                <div class="panel-body">
                    <div class="table-striped">
                        <table class="table table-striped table-bordered table-hover" id="example">
                             <thead>
                                <tr>
                                    <th>Corr</th>
                                    <th>Foto</th>
                                    <th>DUI</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include "../DAO/DAOEmpleado";
                                    $daoE=new DAOEmpleado();
                                    $fila=$daoE->consultaAllSinUsario();
                                    $contador=1;

                                    foreach ($fila as $key=> $value) {
                                        echo "<tr>";
                                        echo "<td>".$contador."</td>";
                                        echo "<td><img style='width: 80px; height: 80px; margin: auto;' src='../imagenes/empleados/".$value->getImagen()."''></td>";
                                        echo "<td>".$value->getDui()."</td>";
                                        echo "<td>".$value->getNombre()." ".$value->getApellido()."</td>";
                                        echo "<td> <CENTER><button type='button' class='btn btn-info' onclick=ajax_nombreC('".base64_encode($value->getIdEmpleado())."') title='Agregar'><i class='fa fa-plus-square'></i></button></CENTER> </td>";

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

                        <div style="background-color: rgb(41, 60, 72);" class="panel-footer">
                            <button class="btn btn-success" type="button" onclick="validacion()" ><i class="fa fa-fw fa-lg fa-check-circle"></i> <?php if(isset($id)) echo "Editar"; else echo "Guardar";?> </button> &nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-primary" id="btn-cancelar" onclick="limpiar()"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</button>
                                         
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
    $clave=(isset($_REQUEST["clave"]))?$_REQUEST["clave"]:"";
    $tiporol=(isset($_REQUEST["roles"]))?$_REQUEST["roles"]:"";
    $estado="Activo";
    $idempleado=(isset($_REQUEST["cate"]))?$_REQUEST["cate"]:"";

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
        require_once "SED.php";
        $claveD=SED::encryption($clave);

        require_once "../DAO/DAOUsuario.php";  
        $daoP=new DAOUsuario();
        if ($daoP-> insertar(new ClaseUsuario(null,$nombre,$claveD,$tiporol,$estado,$idempleado))==1) {  
           //if ($nombrefoto!='') {
           //   # code...
            //  move_uploaded_file($url_tempo, $src); 
           // }
            
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
        if ($daoP->actualizar(new ClaseEmpleado($baccion,$imgProducto,$nombre,$apellido,$estadofami,$nit,$dui,$sueldo,$direcci,$genero,$fechana,$correo,$telefono,1,$idcargo))==1) {
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