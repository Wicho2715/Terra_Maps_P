<?php


include ("../bd/conexion.php"); 

$inversion = $_POST["inversion"];
$nomf = $_POST['nomf'];
$tipof = $_POST['tipof'];
$solvencia = $_POST['solvencia'];
$opcre = $_POST["opcre"];
$estado3 = $_POST["estado3"];

$insert2 = "INSERT INTO financiamiento(ETAPA3,INVER_INICIAL,NOMBRE_FINANCIAMIENTO,TIPO,SOLVENCIA,CREDITO,ESTADO_FINANCIAMIENTO) 
VALUES ('ETAPA 3', '$inversion', '$nomf', '$tipof', '$solvencia', '$opcre', '$estado3')";

//Ejecutar consulta

$res = mysqli_query($conexion, $insert2);
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

//ya funciona NO MOVER//

//cerrar conexion
mysqli_close($conexion);


?>