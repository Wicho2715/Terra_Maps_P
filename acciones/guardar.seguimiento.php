<?php
include("../db/conexion.php");

if(isset($_POST['guardarse'])){
    $fechac = $_POST['fechac'];
    $estadoc = $_POST['estadoc'];
    $idcontacto = $_POST['idcontacto'];

    
    $query = "INSERT INTO seguimiento(FECHA, ESTADO_CITA, ID_CONTACTO) VALUES ('$fechac', '$estadoc', '$idcontacto')";
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