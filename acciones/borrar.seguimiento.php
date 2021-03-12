<?php

include("../db/conexion.php");

if(isset($_GET['ID_SEGUIMIENTO'])) {
  $id = $_GET['ID_SEGUIMIENTO'];
  $query = "DELETE FROM seguimiento WHERE ID_SEGUIMIENTO = $id";
  $resultado = mysqli_query($conn, $query);
  if(!$resultado) {
    die("Query Failed.");
  }
  header('Location: ../seguimiento.php');
}

?>