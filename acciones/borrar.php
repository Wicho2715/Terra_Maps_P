<?php

include("../db/conexion.php");

if(isset($_GET['ID_CLIENTE'])) {
  $id = $_GET['ID_CLIENTE'];
  $query = "DELETE FROM clientes WHERE ID_CLIENTE = $id";
  $resultado = mysqli_query($conn, $query);
  if(!$resultado) {
    echo '<script>
            alert("Error al eliminar informacion");
            window.history.go(-1);
            </script>' ;
    }else{
        echo '<script>
        alert("Registro eliminado correctamente");
        window.history.go(-1);
        </script>' ;
     }
}

?>