<?php
include("../db/conexion.php");

if(isset($_POST['guardarpu'])){
    $nombrepu = $_POST['nombrepu'];
    $tipopu = $_POST['tipopu'];
    $descripcion = $_POST['descripcion'];


    $query = "INSERT INTO publicidad(NOMBRE_PU, TIPO, DESCRIPCION) VALUES ('$nombrepu', '$tipopu', '$descripcion')";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        echo '<script>
        alert("Error al guardar informacion");
        window.history.go(-1);
        </script>' ;
    }else{
        echo '<script>
        alert("Informacion gurdada correctamente");
        window.history.go(-1);
        </script>' ; 
    } 
}
