<?php


include ("../db/conexion.php"); 

$proyec = $_POST["proyecto"];
$inversion = $_POST["inversion"];
$nomf = $_POST['nomf'];
$tipof = $_POST['tipof'];
$solvencia = $_POST['solvencia'];
$opcre = $_POST["opcre"];
$estado3 = $_POST["estado3"];

$insert2 = "INSERT INTO financiamiento(ID_PROYECTO,ETAPA3,INVER_INICIAL,NOMBRE_FINANCIAMIENTO,TIPO,SOLVENCIA,CREDITO,ESTADO_FINANCIAMIENTO) 
VALUES ('$proyec','ETAPA 3', '$inversion', '$nomf', '$tipof', '$solvencia', '$opcre', '$estado3')";

//Ejecutar consulta

$res = mysqli_query($conn, $insert2);
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