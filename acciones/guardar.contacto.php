<?php
include("../db/conexion.php");

if(isset($_POST['guardarc'])){
    $tipoc = $_POST['tipocontacto'];
    $destinatario = $_POST['destinatario'];
    $asunto = $_POST['asunto'];
    $resumen = $_POST['resumen'];
    $fechac = $_POST['fechac'];
    $nombrec = $_POST['nombrecs'];
    $acuerdo = $_POST['acuerdo'];
    $idcliente = $_POST['idcliente'];
    $idpublicidad = $_POST['idpublicidad'];
    $notificacion = $_POST['notificacion'];

    $query = "INSERT INTO contacto(TIPO_CONTACTO, DESTINATARIO, ASUNTO, RESUMEN, FECHA_PC, NOMBRE_CONTACTO, ACUERDO, ID_CLIENTE, ID_PUBLICIDAD, ESTADO) VALUES ('$tipoc', '$destinatario', '$asunto', '$resumen', '$fechac', '$nombrec', '$acuerdo', '$idcliente', '$idpublicidad', '$notificacion')";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        echo '<script>
        alert("Error al guardar informacion");
        window.history.go(-1);
        </script>' ;
    }else{
        echo '<script>
        alert("Informacion gurdada correctamente");
        window.location="../actualizar_notificaciones.php";
        </script>' ;
    }
}
