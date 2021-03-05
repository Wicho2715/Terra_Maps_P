<?php
include("../db/conexion.php");

if(isset($_POST['guardarpu'])){
    $nombrepu = $_POST['nombrepu'];
    $tipopu = $_POST['tipopu'];
    $descripcion = $_POST['descripcion'];

    
    $query = "INSERT INTO publicidad(NOMBRE_PU, TIPO, DESCRIPCION) VALUES ('$nombrepu', '$tipopu', '$descripcion')";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        die("Query failed");
    }
    $_SESSION['message'] = 'Datos guardados correctamente';
    $_SESSION['message_type'] = 'success';
    header('Location: ../contacto.php');
}