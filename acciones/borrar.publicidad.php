<?php

include("../db/conexion.php");
session_start();
if(isset($_GET['ID_PUBLICIDAD'])) {
  $id = $_GET['ID_PUBLICIDAD'];
  $query = "DELETE FROM publicidad WHERE ID_PUBLICIDAD = $id";
  $resultado = mysqli_query($conn, $query);
  if(!$resultado) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Eliminado Correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: ../contacto.php');
}

?>