<?php

include ("../db/conexion.php"); 

  $nomproyec = $_POST["nomproyec"];
  $objetpro = $_POST["objetpro"];
  $cliente = $_POST["cliente"];
  $puesto = $_POST["puesto"];
  $telefono = $_POST["telefono"];
  $planmkt = $_POST["planmkt"];
  $plane = $_POST["plane"];
  $recursoh = $_POST["recursoh"];
  $estado2 = $_POST["estado2"];

//Consulta para insertar
$insert = "INSERT INTO proyecto_inicial(NOMBRE_PROYECTO,ETAPA2,OBJETIVO,ID_CLIENTE,PUESTO,TELEFONO,ESTRATEGIA_MKT,PLAN_ESTRATEGICO,RE_ACTUAL,ESTADO_PROYECTO) 
VALUES ('$nomproyec','ETAPA 1', '$objetpro','$cliente','$puesto','$telefono','$planmkt','$plane','$recursoh','$estado2')";

//Ejecutar consulta

$res = mysqli_query($conn, $insert);
if (!$res){
  echo '<script>
       alert("Error al guardar informacion");
       window.history.go(-1);
       </script>' ;
  
}
else{
   echo '<script>
   alert("Informacion gurdada correctamente");
   window.history.go(-1);
   </script>' ;
}


//cerrar conexion
mysqli_close($conn);



?>