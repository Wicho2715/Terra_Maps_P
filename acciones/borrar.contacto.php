<?php

include("../db/conexion.php");
session_start();
if(isset($_GET['ID_CONTACTO'])) {
  $id = $_GET['ID_CONTACTO'];
  $query = "DELETE FROM contacto WHERE ID_CONTACTO = $id";
  $resultado = mysqli_query($conn, $query);
  if(!$resultado) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Eliminado Correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: ../contacto.php');
}

?>