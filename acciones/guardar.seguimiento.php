<?php
include("../db/conexion1.php");

if(isset($_POST['guardarse'])){
    $fechac = $_POST['fechac'];
    $estadoc = $_POST['estadoc'];
    $idcontacto = $_POST['idcontacto'];

    
    $query = "INSERT INTO seguimiento(FECHA, ESTADO_CITA, ID_CONTACTO) VALUES ('$fechac', '$estadoc', '$idcontacto')";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        die("Query failed");
    }
    $_SESSION['message'] = 'Datos guardados correctamente';
    $_SESSION['message_type'] = 'success';
    header('Location: ../seguimiento.php');
}