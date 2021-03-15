<?php

include("../db/conexion.php");

if(isset($_GET['ID_CONTACTO'])) {
  $id = $_GET['ID_CONTACTO'];
  $query = "DELETE FROM contacto WHERE ID_CONTACTO = $id";
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