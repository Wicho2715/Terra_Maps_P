<?php

include("../db/conexion.php");

if(isset($_GET['ID_CLIENTE'])) {
  $id = $_GET['ID_CLIENTE'];
  $query = "DELETE FROM clientes WHERE ID_CLIENTE = $id";
  $resultado = mysqli_query($conn, $query);
  if(!$resultado) {
    die("Query Failed.");
  }
  header('Location: ../clientes.php');
}

?>