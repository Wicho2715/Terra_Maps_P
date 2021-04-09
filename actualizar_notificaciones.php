<?php
require 'db/conexion.php';
session_start();
$fechaa= date("Y-m-d");
$query= mysqli_query($conn, "SELECT ID_CONTACTO, ASUNTO, DESTINATARIO, FECHA_PC, NOMBRE_CONTACTO FROM contacto
          WHERE FECHA_PC LIKE '%".$fechaa."%' AND ESTADO LIKE 'Activo'");
        $num_notif= mysqli_num_rows($query);
        if ($num_notif=="0") {
        }
        $asuntoo= array();
        $id_contactoo= array();
        $destinatarioo= array();
        $fecha_pcc= array();
        $nombre_contactoo= array();
        $cont = 0;
        while($row = mysqli_fetch_assoc($query)) {
          $id_contactoo[$cont] = $row['ID_CONTACTO'];
          $asuntoo[$cont] = $row['ASUNTO'];
          $destinatarioo[$cont] = $row['DESTINATARIO'];
          $fecha_pcc[$cont] = $row['FECHA_PC'];
          $nombre_contactoo[$cont] = $row['NOMBRE_CONTACTO'];
          $cont++;
        }
$_SESSION['id_contacto']= $id_contactoo;
$_SESSION['asunto']= $asuntoo;
$_SESSION['destinatario']= $destinatarioo;
$_SESSION['fecha_pc']= $fecha_pcc;
$_SESSION['nombre_contacto']= $nombre_contactoo;
$_SESSION['num_notif']= $num_notif;
header('Location: contacto.php');
?>
