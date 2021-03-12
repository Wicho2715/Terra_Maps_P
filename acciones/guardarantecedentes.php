<?php

include ("../db/conexion.php"); 

    $proyec = $_POST["proyec"];
    $motivo = $_POST["motivo"];
    $exp_sector = $_POST["exp_sector"];
    $exptecno = $_POST["exptecno"];
    $edificios = $_POST["edificios"];
    $conocimiento = $_POST["conocimiento"];
    $encargado = $_POST["encargado"];
    $anos = $_POST["anos"];
    $so = $_POST["so"];
    $procesador = $_POST["procesador"];
    $ram = $_POST["ram"];
    $alma = $_POST["alma"];
    $tipo = $_POST["tipo"];
    $rpropios = $_POST["rpropios"];
    $rejenos = $_POST["rejenos"];
    $estado1 = $_POST['estado1'];

    //Consulta para insertar
$inante = "INSERT INTO antecedentes(ID_PROYECTO,ETAPA,MOTIVO_CONTACTO,EXPE_EMP,EXPE_TECNO,INSTA_EDI,PER_TEMA,EXP_ENCA,ANO_EXP,SISTEMA_OPERATIVO,PROCESADOR,RAM,ALMACEN,TI_INTERNET,RE_PROPIOS,RE_AJENOS,ESTADO_ANTECEDENTES) 
VALUES ('$proyec', 'ETAPA 2', '$motivo', '$exp_sector', '$exptecno', '$edificios', '$conocimiento', '$encargado', '$anos', '$so', '$procesador', '$ram', '$alma', '$tipo', '$rpropios', '$rejenos','$estado1')";

//Ejecutar consulta

$res = mysqli_query($conn, $inante);
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