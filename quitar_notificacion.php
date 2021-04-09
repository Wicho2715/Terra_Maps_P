<?php
require 'db/conexion.php';
session_start();
$id_contactoo= $_GET['ID_CONTACTO'];
$query = "UPDATE contacto set ESTADO = 'Oculta' WHERE ID_CONTACTO = $id_contactoo";
mysqli_query($conn, $query);
header('Location: actualizar_notificaciones.php');
 ?>
