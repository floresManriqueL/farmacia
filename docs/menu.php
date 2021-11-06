<?php
                    require_once "../DAO/DAOProducto.php";
                    $daoE1=new DAOProducto();
                    $fila1=$daoE1->consultaAll();
                    $contador=0;
                    
                    foreach ($fila1 as $key=> $value) {
                          if($value->getCantidad() <= 10){
                              if($value->getEstado() == "Activo"){
                              $contador++;
                          }
                            }
                        }
                         if($_SESSION['idusuario'] == ''){
                            echo "<script type='text/javascript'>";
                            echo "location.href='../index.php'";
                            echo "</script>";
                        }
?>

    <!--  wrapper -->
    <div style="background-color: rgb(41, 60, 72);" id="wrapper">
        <!-- navbar top -->
        <nav style="background-color: rgb(50,50,50);" class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div style="background-color: rgb(50,50,50);" class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="background-color: rgb(50,50,50);" class="user-section" href="iniciomenu.php">
                    <?php
                     require_once "../DAO/DAOEmpleado.php";
                     $daoPx = new DAOEmpleado();
                   //$id=base64_decode($_REQUEST['criterio']);
                    $objPx = null;
                   // echo $_SESSION['idempleado'];
                    $objPx = $daoPx->consultaIndividual($_SESSION['idempleado']);
                       if($objPx!=null){
                        echo "<img style='width: auto; height: 80px;'' src='../imagenes/empleados/".$objPx->getImagen()."' alt='' ></img>";
                       }else{
                        echo "<img style='width: auto; height: 80px;'' src='../assets/img/user.jpg' alt='' ></img>";
                       }
                     ?>
                    <img src="../assets/img/logo2.png" alt="" ></img>
                </a>
            </div>
             <div  class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="iniciomenu.php">
                   <center><h1 style="color: rgb(255,255,255); font-weight: 900;">FARMACIA LA BENDICION</h1></center>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right"> 
                
               <!-- <li style="background-color: rgb(50,50,50);" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                  
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    
                </li>-->

                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                  
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                  
                </li>-->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning"><?php echo $contador; ?></span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                     <ul class="dropdown-menu dropdown-alerts">
                        <li>
                             <?php
                    foreach ($fila1 as $key=> $value) {
                          if($value->getCantidad() <= 10){
                              if($value->getEstado() == "Activo"){
                            //if($value->getEstodo() == "Activo"){
                        echo "<a href='tb_listaproducto.php' onclick=ver('".$value->getIdProducto()."')>
                                <div>
                                    <i class='fa fa-comment fa-fw'></i>&nbsp;Producto:&nbsp; ".$value->getNombre()."
                                    <span class='pull-right text-muted small'>Stock&nbsp;&nbsp;".$value->getCantidad()."</span>
                                </div>
                            </a>";
                            }
                         }
                    } 
                    ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="iniciomenu.php">
                                <strong>Ver Alertas</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- dropdown alerts-->
                   <!--<ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>-->
                    <!-- end dropdown-alerts -->
                </li>
                 
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="fm_perfil.php"><i class="fa fa-user fa-fw"></i>Perfil</a>
                        </li>
                       <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>-->
                        <li class="divider"></li>
                        <li><a href="cerrar.php"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesion</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav  style="background-color: rgb(41, 60, 72);" class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div  style="background-color: rgb(41, 60, 72);" class="sidebar-collapse">
                <!-- side-menu -->
                               <?php if($_SESSION['tipo']=='Administrador'){ ?>
                <ul style="background-color: rgb(41, 60, 72);"class="nav" id="side-menu">

                    <li> <input type="text" ></li>

                    <li>
                        <!-- user image section-->
                        <center><div class="form-group"><div style="background-color: rgb(100,100,100);" class="user-section">
                            <!--<div class="user-section-inner">
                                <img src="../assets/img/user.jpg" alt="">
                            </div>-->
                            <div  class="user-info">
                                <div><?php $us=$_SESSION['nombre']; echo $us;?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;<?php $us=$_SESSION['tipo']; echo $us;?>
                                </div>
                            </div>

                        </div>
                        </div></center>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                         <!--<div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>-->
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="index.html"><i class="app-menu__icon fa fa-desktop"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="#"><i class="app-menu__icon fa fa-shopping-cart"></i> Gestionar Compra<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="fm_compra.php"><i class="icon fa fa-circle-o"></i> Realizar compra</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Listar Compra</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bus"></i> Gestionar Proveedor<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Agregar Proveedor</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Listar Proveedor</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-cubes"></i> Gestionar Producto<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="fm_producto.php"><i class="icon fa fa-circle-o"></i> Agregar Producto</a>
                            </li>
                            <li>
                                <a href="tb_listaproducto.php"><i class="icon fa fa-circle-o"></i> Listar Producto</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="#"><i class="app-menu__icon fa fa-cube"></i> Gestionar Categoría<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="fm_categoria.php"><i class="icon fa fa-circle-o"></i> Agregar Categoría</a>
                            </li>
                            <li>
                                <a href="tb_listacategoria.php"><i class="icon fa fa-circle-o"></i> Listar Categoría</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i> Gestionar Venta<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="fm_venta.php"><i class="icon fa fa-circle-o"></i> Realizar Venta</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Listar Venta</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="app-menu__icon fa fa-users"></i> Gestionar Cliente<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Agregar Cliente</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Listar Cliente</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-male"></i> Gestionar Empleados<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="fempleado.php"><i class="icon fa fa-circle-o"></i> Agregar Empleados</a>
                            </li>
                            <li>
                                <a href="templeado.php"><i class="icon fa fa-circle-o"></i> Listar Empleados</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user-circle-o"></i> Gestionar Cuenta<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Agregar Cuenta</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Listar Cuenta</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-database"></i> Gestionar Backup<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Generar Backup</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Restaurar Backup</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file-pdf-o"></i> Gestionar Informes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de compra </a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de proveedor</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de clientes</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de empleado</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de usuarios </a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de venta</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de producto</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <!-- <li>
                        <a href="timeline.html"><i class="fa fa-flask fa-fw"></i>Timeline</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i>Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                        </ul>
                      
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                              
                            </li>
                        </ul>
                      
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>paginas simples<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank1.php">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                       
                    </li>-->
                </ul>
            <?php }else{ ?>
                 <ul style="background-color: rgb(41, 60, 72);"class="nav" id="side-menu">

                    <li> <input type="text" ></li>

                    <li>
                        <!-- user image section-->
                        <center><div class="form-group"><div style="background-color: rgb(100,100,100);" class="user-section">
                            <!--<div class="user-section-inner">
                                <img src="../assets/img/user.jpg" alt="">
                            </div>-->
                            <div  class="user-info">
                                <div><?php $us=$_SESSION['nombre']; echo $us;?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;<?php $us=$_SESSION['tipo']; echo $us;?>
                                </div>
                            </div>

                        </div>
                        </div></center>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                         <!--<div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>-->
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="index.html"><i class="app-menu__icon fa fa-desktop"></i> Inicio</a>
                    </li>
                   <!-- <li>
                        <a href="#"><i class="app-menu__icon fa fa-shopping-cart"></i> Gestionar Compra<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="fm_compra.php"><i class="icon fa fa-circle-o"></i> Relizar compra</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Listar Compra</a>
                            </li>
                        </ul>
                       
                    </li>-->
                     <!--<li>
                        <a href="#"><i class="fa fa-bus"></i> Gestionar Proveedor<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Agregar Proveedor</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Listar Proveedor</a>
                            </li>
                        </ul>
                       
                    </li>-->
                      <li>
                        <a href="#"><i class="fa fa-cubes"></i> Gestionar Producto<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!--<li>
                                <a href="fm_producto.php"><i class="icon fa fa-circle-o"></i> Agregar Producto</a>
                            </li>-->
                            <li>
                                <a href="tb_listaproducto.php"><i class="icon fa fa-circle-o"></i> Listar Producto</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                      <!--  <a href="#"><i class="app-menu__icon fa fa-cube"></i> Gestionar Categoria<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="fm_categoria.php"><i class="icon fa fa-circle-o"></i> Agregar Categoria</a>
                            </li>
                            <li>
                                <a href="tb_listacategoria.php"><i class="icon fa fa-circle-o"></i> Listar Categoria</a>
                            </li>
                        </ul>
                       
                    </li>-->
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i> Gestionar Venta<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="fm_venta.php"><i class="icon fa fa-circle-o"></i> Realizar Venta</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Listar Venta</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="app-menu__icon fa fa-users"></i> Gestionar Cliente<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Agregar Cliente</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Listar Cliente</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <!--<li>
                        <a href="#"><i class="fa fa-male"></i> Gestionar Empleados<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="fempleado.php"><i class="icon fa fa-circle-o"></i> Agregar Empleados</a>
                            </li>
                            <li>
                                <a href="templeado.php"><i class="icon fa fa-circle-o"></i> Listar Empleados</a>
                            </li>
                        </ul>
                       
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user-circle-o"></i> Gestionar Cuenta<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Agregar Cuenta</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Listar Cuenta</a>
                            </li>
                        </ul>
                       
                    </li>-->
                  <!--  <li>
                        <a href="#"><i class="fa fa-database"></i> Gestionar Backup<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Generar Backup</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Restaurar Backup</a>
                            </li>
                        </ul>
                       
                    </li>-->
                   <!-- <li>
                        <a href="#"><i class="fa fa-file-pdf-o"></i> Gestionar Informes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de compra </a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de proveedor</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de clientes</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de empleado</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de usuarios </a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de venta</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon fa fa-circle-o"></i> Lista de producto</a>
                            </li>
                        </ul>
                       
                    </li>-->
                    <!-- <li>
                        <a href="timeline.html"><i class="fa fa-flask fa-fw"></i>Timeline</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i>Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                        </ul>
                      
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                              
                            </li>
                        </ul>
                      
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>paginas simples<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank1.php">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                       
                    </li>-->
                </ul>
           <?php }?>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <!--<div id="page-wrapper">

            <div class="row">
              
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-heartbeat" aria-hidden="true"></i>Farmacia La Bendicion</h1>
                     <p><i class="fa fa-street-view"></i>&nbsp;Cuidar a tu salud es un compromiso; pero hacerlo feliz es un placer.</p>
                </div>
               
            </div>

            <div class="row">
               
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hola ! </b>Bienvenido de nuevo <b>Usuario </b>
 <i class="fa  fa-pencil"></i><b>&nbsp; </b> te podemos ayudar;
                    </div>
                </div>
               
            </div>

             <div class="row">
        
          <div class="col-lg-12">
            <h1 class="tile-tile">  Bienvenido</h1>
            <ul>
              <p><?php $us=$_SESSION['nombre']; echo $us?></p>
            </ul>
             <center><img src="assets/img/ver1.PNG" alt="" ></img></center>
          </div>
        <div class="row">
               
                <div class="col-lg-12">
                    <div class="alert alert-info">
                      <center>  <i class="fa fa-folder-open"></i><b> Copyright  <i class="icon fa fa-circle-o"></i> </b>2021 <b>&nbsp;FARMACIA LA BENDICION </b>
        <b>&nbsp; </b> Reservados todos los derechos.</center>
                    </div>
                </div>
              
            </div>
      </div>-->
           <!-- <div class="row">
              
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>20 </b>Meetings Sheduled This Month

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>27 % </b>Profit Recorded in This Month  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-rss fa-3x"></i>&nbsp;<b>1,900</b> New Subscribers This Year

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>2,000 $ </b>Payment Dues For Rejected Items
                    </div>
                </div>
              
            </div>

            <div class="row">
                <div class="col-lg-8">



                   
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Area Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>

                    </div>
                  
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Simple Table Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>$8345.23</td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                          
                        </div>
                      
                    </div>
                

                </div>

                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <h3>20,741 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Daily User Visits
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <h3>2,060 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Pending Orders Found
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <i class="fa fa fa-floppy-o fa-3x"></i>
                            <h3>20 GB</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">New Data Uploaded
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-thumbs-up fa-3x"></i>
                            <h3>2,700 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">New User Registered
                            </span>
                        </div>
                    </div>







                </div>

            </div>

            <div class="row">
                <div class="col-lg-4">
                  
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i>Notifications Panel
                        </div>

                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i>New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>

                            </div>
                           
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div>

                    </div>
                   
                </div>
                <div class="col-lg-4">
                   
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            <a href="#" class="btn btn-default btn-block">View Details</a>
                        </div>

                    </div>
                   
                </div>
                <div class="col-lg-4">
                    
                    <div class="chat-panel panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Chat
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i>Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i>Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i>Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i>Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i>Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>13 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>

                    </div>-->
                    <!--End Chat Panel Example-->
                </div>
            </div>


         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
