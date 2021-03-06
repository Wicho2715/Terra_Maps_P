<?php
session_start();
$usuario= $_SESSION['usuario'];
if($usuario == null || $usuario= ''){
    header("Location:inicio_sesion.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Terra Maps</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- datables CSS basico-->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/datatables.min.css">
    <!-- datables estilos 4 CSS-->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilotab3.css">
    <link rel="stylesheet" href="css/estilota.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                <!-- <i class="fas fa-laugh-wink"></i>-->

                </div>
                <div class="sidebar-brand-text mx-3">Administrador </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tablero de informaci&oacute;n</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfaces
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                     <!-- <i class="fas fa-fw fa-cog"></i>-->
                     <i class="fas fa-user-plus"></i>
                    <span>Captaci&oacute;n de Clientes</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Apartados:</h6>
                        <a class="collapse-item" href="clientes.php">Clientes</a>
                        <a class="collapse-item" href="contacto.php">Contactos</a>
                        <a class="collapse-item" href="seguimiento.php">Seguimientos</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <!-- <i class="fas fa-fw fa-wrench"></i>-->
                    <i class="fas fa-file-alt"></i>


                    <span>Ficha de avance</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Etapas de ficha de avance</h6>
                        <a class="collapse-item" href="proyectoinicial.php">Proyecto Inicial</a>
                        <a class="collapse-item" href="antecedentes.php">Antecedentes</a>
                        <a class="collapse-item" href="financiamiento.php">Financiamiento</a>
                        <a class="collapse-item" href="editarproyectoinicial.php">Modificar P-I</a>
                        <a class="collapse-item" href="registroante.php">Modificar Antecedentes</a>
                        <a class="collapse-item" href="Registrofina.php">Modificar Financiamiento</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->


            <!-- Heading -->


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">

                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <div class="collapse-divider"></div>


                    </div>
                </div>
            </li>





            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"><?php $num_notif= $_SESSION['num_notif']; if ($num_notif=="0") {
                                  $num_notif= "";
                                } echo "$num_notif"; ?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Citas programadas
                                </h6>
                                <?php
                                $asuntoo= array();
                                $id_contactoo= array();
                                $destinatarioo= array();
                                $fecha_pcc= array();
                                $nombre_contactoo= array();
                                $id_contactoo= $_SESSION['id_contacto'];
                                $asuntoo= $_SESSION['asunto'];
                                $destinatarioo= $_SESSION['destinatario'];
                                $fecha_pcc= $_SESSION['fecha_pc'];
                                $nombre_contactoo= $_SESSION['nombre_contacto'];
                                $total= count($id_contactoo);
                                if ($total==0) {?>
                                  <a class="dropdown-item d-flex align-items-center" href="#" >Hoy no tienes citas programadas</a>
                                <?php }
                                for ($i = 0; $i < $total; $i++) {

                                    ?>
                                    <br>
                                    <center><a class="btn btn-outline-primary" href="editar.contacto.php?ID_CONTACTO=<?php echo $id_contactoo[$i]; ?>">Actualizar</a>
                                    <a class="btn btn-outline-danger" href="quitar_notificacion.php?ID_CONTACTO=<?php echo $id_contactoo[$i]; ?>">Quitar</a></center>
                                    <a class="dropdown-item d-flex align-items-center" href="seguimiento.php" >
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                          <div class="small text-gray-500"><?php echo $fecha_pcc[$i]; ?></div>
                                          <span class="font-weight-bold">Nombre: <?php echo $nombre_contactoo[$i]; ?>, Contacto: <?php echo $destinatarioo[$i]; ?>, Asunto: <?php echo $asuntoo[$i]; ?>.</span>

                                        </div>

                                    </a>


                                    <?php
                                }
                                ?>
                                </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                  <?php
                                    $nombree= $_SESSION['nombre'];
                                    $apellido= $_SESSION['apellido'];
                                    echo "$nombree";
                                  ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/logo.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="cerrar_sesion.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
