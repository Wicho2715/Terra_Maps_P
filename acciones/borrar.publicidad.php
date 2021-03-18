<?php

include("../db/conexion.php");

if(isset($_GET['ID_PUBLICIDAD'])) {
  $id = $_GET['ID_PUBLICIDAD'];
  $query = "DELETE FROM publicidad WHERE ID_PUBLICIDAD = $id";
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