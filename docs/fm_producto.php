<?php session_start();
error_reporting(0);
    if (isset($_REQUEST['id'])) {/* comprobamos si la variable que viene en la url si existe */
        # code...
        require_once ("../DAO/DAOProducto.php");
        $daoP=new DAOProducto();
        $id=base64_decode($_REQUEST['id']);/* desencriptamos el id recibido en la url */
        $objP=null;
        $objP=$daoP->consultaIndividual($id);
if (isset($objP)) {
          # code...
          $foto='';
          $classRemove='notBlock';
          if ($objP->getFoto()!='img_producto.jpg') {
            # code...
            $classRemove='';
            $foto='<img id="img" src="../imagenes/uploads/'.$objP->getFoto().'">';
          }
        }else{
          header("location: tb_listaproducto.php");
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
    <script src="js/js_producto.js"></script>
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
                    <h1 class="page-header"><i class="fa fa-address-card" aria-hidden="true"></i> Agregar Nuevo Producto</h1>
                </div>
                <!--end page header -->
            </div>
              <form action="" method="post" class="form-group " id="produc" name="produc" enctype="multipart/form-data">
        <input type="hidden" name="bandera" id="bandera">
        <input type="hidden" name="baccion" id="baccion" value="<?php if(isset($objP)) echo $objP->getIdProducto(); ?>">
         <input type="hidden" name="foto_actual" id="foto_actual" value="<?php if(isset($objP)) echo $objP->getFoto(); ?>">
        <input type="hidden" name="foto_remove" id="foto_remove" value="<?php if(isset($objP)) echo $objP->getFoto(); ?>">
           
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       <div style="background-color: rgb(41, 60, 72);" class="panel-heading">
                           <h5 style="color: rgb(255, 255, 255);"><i class="fa fa-address-book-o" aria-hidden="true"></i> Gestión de Producto</h5>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   <div class="form-group">
                                             <label><i class="fa fa-picture-o" aria-hidden="true"></i> Fotografía de Producto</label>
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
                                            <label id="cod" style="height: 30px;"><i class="fa fa-minus-square" aria-hidden="true"></i> Código</label>&nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-info" type="button" id="bgene"  onclick="generar()" disabled="disabled"><i class="fa fa-random" aria-hidden="true"></i> Generar</button>
                                            <input class="form-control" name="codigo" id="codigo" type="text" value="<?php if(isset($objP)) echo $objP->getCodigo(); ?>" placeholder="codigo">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                        
                                         <div class="form-group">
                                            <label id="nom"><i class="fa fa-minus-square" aria-hidden="true"></i> Nombre</label>
                                            <input class="form-control" name="nombre" id="nombre" type="text" value="<?php if(isset($objP)) echo $objP->getNombre(); ?>" placeholder="Nombre de Producto" autocomplete="off">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-align-center" aria-hidden="true"></i></i> Descripción</label>
                                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"><?php if(isset($objP)) echo $objP->getDescripcion(); ?></textarea>
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>   

                                </div>
                                <div class="col-lg-6">
                                                                        <div class="form-group">
                                            <label id="ti1"><i class="fa fa-list-ol" aria-hidden="true"></i> Tipo</label>
                                            <select name="tipo" id="tipo" class="form-control">
                                                <option value="0">Seleccione</option>
                                                 <?php
                        if (isset($objP)) {
                          # code...
                          if ($objP->getTipo()=="Ninguno") {
                            # code...
                            echo "<option selected value='Ninguno'>Ninguno</option>";
                            echo "<option value='Blister'>Blister</option>";
                             echo "<option value='Bote'>Bote</option>";
                              echo "<option value='Caja'>Caja</option>";
                          }else if($objP->getTipo()=="Blister"){
                             echo "<option selected value='Blister'>Blister</option>";
                            echo "<option value='Ninguno'>Ninguno</option>";
                             echo "<option value='Bote'>Bote</option>";
                              echo "<option value='Caja'>Caja</option>";
                          }else if($objP->getTipo()=="Bote"){
                             echo "<option selected value='Bote'>Bote</option>";
                           echo "<option value='Ninguno'>Ninguno</option>";
                            echo "<option value='Blister'>Blister</option>";
                              echo "<option value='Caja'>Caja</option>";
                          }else if($objP->getTipo()=="Caja"){
                             echo "<option selected value='Caja'>Caja</option>";
                           echo "<option value='Ninguno'>Ninguno</option>";
                            echo "<option value='Blister'>Blister</option>";
                             echo "<option value='Bote'>Bote</option>";
                          }
                                                    
                        } else {
                          # code...
                          echo "<option selected value='Ninguno'>Ninguno</option>";
                            echo "<option value='Blister'>Blister</option>";
                             echo "<option value='Bote'>Bote</option>";
                              echo "<option value='Caja'>Caja</option>";
                        }
                                                
                      ?>
                                             
                                            </select>
                                        </div>

                                                                               <div class="form-group">
                                            <label><i class="fa fa-check-circle-o" aria-hidden="true"></i> Estado</label>
                                            <br></br>
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
                        echo "<label class='radio-inline'>";
                          echo "<input type='radio' name='estado' id='estado' value='Activo' checked>Activo";
                          echo "</label>";

                          echo "<label class='radio-inline'>";
                          echo "<input type='radio' name='estado' id='estado' value='Inactivo'>Inactivo";
                          echo "</label>";
                      }
                  ?>
                                        </div>

                                         <div class="form-group">
                                            <label id="uni"><i class="fa fa-plus-square" aria-hidden="true"></i> Unidades Individuales</label>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">#</span>
                                            <input type="text" name="unidades" id="unidades" class="form-control" value="<?php if(isset($objP)) echo $objP->getUnidades(); ?>" onkeypress="return soloNumero(event)" placeholder="300" disabled="disabled" autocomplete="off">
                                            <span class="input-group-addon">00</span>
                                        </div>
                                        <input type="hidden" name="porcentaje" id="porcentaje" value="hola">
                                        <!-- <div class="form-group">
                                            <label id="gan"><i class="fa fa-percent" aria-hidden="true"></i> Porcentaje de Ganancia</label>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">%</span>
                                            <input type="text" name="porcentaje" id="porcentaje" class="form-control" value="<?php //if(isset($objP)) echo $objP->getPorganancia(); ?>" onkeypress="return soloNumero(event)" placeholder="10">
                                            <span class="input-group-addon">.00</span>
                                        </div>-->
                                          <div class="form-group">
                                            <div id="nomMas">
                                          <input type="hidden" name="cate" id="cate" value="<?php if(isset($objP)) echo $objP->getIdCategoria(); ?>">
                                            <label id="cat" style="height: 30px;"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> Categoría</label>&nbsp;&nbsp;&nbsp;
                                            <button type="button" style="height: 30px;" class="btn btn-info" data-toggle="modal" data-target="#ventana1">
                                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Seleccionar
                                                </button>
                                            <input class="form-control" name="categoria" id="categoria" placeholder="Seleccione una Categoria" value="<?php if(isset($objP)) echo $objP->getNombreCategoria(); ?>" disabled="disabled">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                         </div>
                                        </div>
                                         <div class="form-group">
                                          <div id="nomMas1">
                                          <input type="hidden" name="mar" id="mar" value="<?php if(isset($objP)) echo $objP->getIdMarca(); ?>">
                                            <label id="mar1" style="height: 30px;"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Marca</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="button"  class="btn btn-info" data-toggle="modal" data-target="#ventana2">
                                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Seleccionar
                                                </button>
                                            <input class="form-control" name="marca" id="marca"placeholder="Seleccione una Marca" value="<?php if(isset($objP)) echo $objP->getNombreMarca(); ?>" disabled="disabled">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                         </div>
                                        </div>


                                </div>
                            </div>
                        </div>

                         <div style="background-color: rgb(41, 60, 72);" class="panel-footer">
                                        <button class="btn btn-success" type="button" onclick="validacion()" ><i class="fa fa-fw fa-lg fa-check-circle"></i> <?php if(isset($id)) echo "Editar"; else echo "Guardar";?> </button> &nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-primary" id="btn-cancelar" onclick="limpiar()"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</button> &nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-info" id="btn-cancelar" onclick="redi()"><i class="fa fa-eye" aria-hidden="true"></i> Ver Productos</button>
                                         
                            </div>
                    </div>
                 </div>
            </div>  

<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background-color: rgb(50, 50, 50);" class="modal-header">
        <button style="color: rgb(255, 255, 255);" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: rgb(255, 255, 255);" class="modal-title" id="myModalLabel"><i class="fa fa-list-ul" aria-hidden="true"></i> Lista de Categorías</h4>
      </div>
      <div class="modal-body">
          <div class="panel-body">
                             <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example">
                                    <thead>
                            <tr>
                                 <th>Corr</th>
                                <th>Código</th>
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
                      echo "<td> <CENTER><button type='button' class='btn btn-info' onclick=ajax_nombreC('".base64_encode($value->getIdCategoria())."')><i class='fa fa-plus-square'></i></button></CENTER> </td>";
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
<div class="modal fade" id="ventana2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background-color: rgb(50, 50, 50);" class="modal-header">
        <button style="color: rgb(255, 255, 255);" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: rgb(255, 255, 255);" class="modal-title" id="myModalLabel"><i class="fa fa-list-ul" aria-hidden="true"></i> Lista de Marca</h4>
      </div>
      <div class="modal-body">
          <div class="panel-body">
                          <div class="table-responsive">
                                 <table class="table table-striped table-bordered table-hover" id="example1">
                                      <thead>
                            <tr>
                                 <th>Corr</th>
                                <th>Código</th>
                                 <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              include "../DAO/DAOMarca.php";
                               $daoE=new DAOMarca();
                              $fila=$daoE->consultaAll();
                               $contador=1;

                    foreach ($fila as $key=> $value) {
                      # code...
                      echo "<tr>";
                      echo "<td>".$contador."</td>";
                       echo "<td>".$value->getCodigo()."</td>";
                      echo "<td>".$value->getNombre()."</td>";
                      echo "<td><CENTER><button type='button' class='btn btn-info' onclick=ajax_nombreM('".base64_encode($value->getIdMarca())."')><i class='fa fa-plus-square'></i></button></CENTER></td>";
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
    $codigo=(isset($_REQUEST["codigo"]))?$_REQUEST["codigo"]:"";
    $descripcion=(isset($_REQUEST["descripcion"]))?$_REQUEST["descripcion"]:"";
    $tipo1=(isset($_REQUEST["tipo"]))?$_REQUEST["tipo"]:"";
    $estado=(isset($_REQUEST["estado"]))?$_REQUEST["estado"]:"";
    $unidades=(isset($_REQUEST["unidades"]))?$_REQUEST["unidades"]:"";
    //$porcentaje=(isset($_REQUEST["porcentaje"]))?$_REQUEST["porcentaje"]:"";
    $cate=(isset($_REQUEST["cate"]))?$_REQUEST["cate"]:"";
    $mar=(isset($_REQUEST["mar"]))?$_REQUEST["mar"]:"";



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
      $destino='../imagenes/uploads/';
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
      require_once "../DAO/DAOProducto.php";  
       $daoE=new DAOProducto();
      $fila2=$daoE->consultaAll();
      $veri = '';
      foreach ($fila2 as $key=> $value) {
        if($nombre==$value->getNombre() || $codigo==$value->getCodigo()){
          $veri = 'si';
         }
      }
      if($veri == 'si'){
           echo "<script type='text/javascript'>"; 
         echo " Swal.fire({
  title: 'SyS-Farmacia',
  icon: 'error',
  text: 'Este codigo o nombre de producto ya existe!',
  showConfirmButton: true,
  timer: 5000
});";
//echo "location.href='fm_producto.php';";
        echo "</script>";
      }else{
       if($imgProducto==''){
           $imgProducto='img_producto.jpg';
       }
        require_once "../DAO/DAOProducto.php";  
        $daoP=new DAOProducto();
        if ($daoP-> insertar(new ClaseProducto(null,$codigo,$imgProducto,$nombre,$descripcion,$tipo1,$estado,null,$unidades,null,null,$cate,$mar))==1) {  
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
  timer: 2000
});
redi();";
        echo "</script>";
        $veri = '';
           
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
      }
    }else if($bandera=="edicion"){
         echo "<script type='text/javascript'>"; 
         echo "men();";
        echo "</script>"; 
        require_once "../DAO/DAOProducto.php"; 
        $daoP=new DAOProducto();
        if ($daoP->actualizar(new ClaseProducto($baccion,$codigo,$imgProducto,$nombre,$descripcion,$tipo1,$estado,null,$unidades,null,null,$cate,$mar))==1) {
            # code...
            echo "<script type='text/javascript'>"; 
         echo " Swal.fire({
  title: 'SyS-Farmacia',
  icon: 'success',
  text: 'Datos actualizados',
  showConfirmButton: false,
  timer: 3000
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
  timer: 3000
});";
        echo "</script>";
        }
        
    }
?>