<?php
include("../db/conexion.php");

if(isset($_POST['guardarc'])){
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
    header('Location: ../contacto.php');
}