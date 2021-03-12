<?php

include("../db/conexion.php");

if(isset($_GET['ID_CONTACTO'])) {
  $id = $_GET['ID_CONTACTO'];
  $query = "DELETE FROM contacto WHERE ID_CONTACTO = $id";
  $resultado = mysqli_query($conn, $query);
  if(!$resultado) {
    die("Query Failed.");
  }
  header('Location: ../contacto.php');
}

?>