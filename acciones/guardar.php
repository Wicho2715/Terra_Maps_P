<?php
include("../db/conexion.php");
session_start();
if(isset($_POST['guardar'])){
    $nombre = $_POST['nombres'];
    $cargo = $_POST['cargo'];
    $dependencia = $_POST['dependencia'];
    $email = $_POST['email'];
    $movil= $_POST['movil'];
    $estado = $_POST['estado'];
    
    $query = "INSERT INTO clientes(NOMBRE, CARGO, DEPENDENCIA, EMAIL, MOVIL, ESTADO) VALUES ('$nombre', '$cargo', '$dependencia', '$email', '$movil', '$estado')";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        die("Query failed");
    }
    $_SESSION['message'] = 'Datos guardados correctamente';
    $_SESSION['message_type'] = 'success';
    header('Location: ../clientes.php');
}