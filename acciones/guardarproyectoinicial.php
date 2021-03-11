<?php

include ("../bd/conexion.php"); 

  $nomproyec = $_POST["nomproyec"];
  $objetpro = $_POST["objetpro"];
  $nomre = $_POST["nomre"];
  $puesto = $_POST["puesto"];
  $telefono = $_POST["telefono"];
  $planmkt = $_POST["planmkt"];
  $plane = $_POST["plane"];
  $recursoh = $_POST["recursoh"];
  $estado2 = $_POST["estado2"];

//Consulta para insertar
$insert = "INSERT INTO proyecto_inicial(ETAPA2,NOMBRE_PROYECTO,OBJETIVO,NOMBRE_ENCARGADO,PUESTO,TELEFONO,ESTRATEGIA_MKT,PLAN_ESTRATEGICO,RE_ACTUAL,ESTADO_PROYECTO) 
VALUES ('ETAPA 2','$nomproyec','$objetpro','$nomre','$puesto',$telefono,'$planmkt','$plane','$recursoh','$estado2')";

//Ejecutar consulta

$res = mysqli_query($conexion, $insert);
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
mysqli_close($conexion);



?>