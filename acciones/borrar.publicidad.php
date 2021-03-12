<?php

include("../db/conexion.php");

if(isset($_GET['ID_PUBLICIDAD'])) {
  $id = $_GET['ID_PUBLICIDAD'];
  $query = "DELETE FROM publicidad WHERE ID_PUBLICIDAD = $id";
  $resultado = mysqli_query($conn, $query);
  if(!$resultado) {
    die("Query Failed.");
  }
  header('Location: ../contacto.php');
}

?>