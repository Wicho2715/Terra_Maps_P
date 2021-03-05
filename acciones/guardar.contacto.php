<?php
include("../db/conexion1.php");

if(isset($_POST['guardar'])){
    $tipoc = $_POST['tipocontacto'];
    $destinatario = $_POST['destinatario'];
    $asunto = $_POST['asunto'];
    $resumen = $_POST['resumen'];
    $fechac = $_POST['fechac'];
    $nombrec = $_POST['nombrec'];
    $acuerdo = $_POST['acuerdo'];
    $idcliente = $_POST['idcliente'];
    $idpublicidad = $_POST['idpublicidad'];
    
    $query = "INSERT INTO contacto(TIPO_CONTACTO, DESTINATARIO, ASUNTO, RESUMEN, FECHA_PC, NOMBRE_CONTACTO, ACUERDO, ID_CLIENTE, ID_PUBLICIDAD) VALUES ('$tipoc', '$destinatario', '$asunto', '$resumen', '$fechac', '$nombrec', '$acuerdo', '$idcliente', '$idpublicidad')";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        die("Query failed");
    }
    $_SESSION['message'] = 'Datos guardados correctamente';
    $_SESSION['message_type'] = 'success';
    header('Location: ../contacto.php');
}