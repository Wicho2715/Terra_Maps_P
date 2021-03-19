<?php

include("db/conexion.php");


$proyec = ' ';
$inversion = ' ';
$nomf = ' ';
$tipof = ' ';
$solvencia = ' ';
$opcre = ' ';
$estado3 = ' ';

if  (isset($_GET['ID_FINANCIAMIENTO'])) {
  $id = $_GET['ID_FINANCIAMIENTO'];
  $query = "SELECT * FROM financiamiento WHERE ID_FINANCIAMIENTO = $id";
  $resultado = mysqli_query($conn, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $proyec = $row['ID_PROYECTO'];
    $inversion = $row['INVER_INICIAL'];
    $nomf = $row['NOMBRE_FINANCIAMIENTO'];
    $tipof = $row['TIPO'];
    $solvencia = $row['SOLVENCIA'];
    $opcre = $row['CREDITO'];
    $estado = $row['ESTADO_FINANCIAMIENTO'];
  }
}

if (isset($_POST['modificarfina'])) {
  $id = $_GET['ID_FINANCIAMIENTO'];
  $proyec = $_POST["proyecto"];
  $inversion = $_POST["inversion"];
  $nomf = $_POST['nomf'];
  $tipof = $_POST['tipof'];
  $solvencia = $_POST['solvencia'];
  $opcre = $_POST["opcre"];
  $estado3 = $_POST["estado3"];
  

  $query = "UPDATE financiamiento set  INVER_INICIAL = '$inversion', NOMBRE_FINANCIAMIENTO = '$nomf', TIPO = '$tipof', SOLVENCIA = '$solvencia', CREDITO = '$opcre'
   WHERE ID_FINANCIAMIENTO = $id";
  mysqli_query($conn, $query);
  header('Location: Registrofina.php');
}
?>
<?php require_once "views/parte_superior.php"?>

<!-- INICIO FORMULARIO HTML -->

<div class="container-fluid">
    <div id="mycontainer" class="container">
<header id="header"> Etapa 2 Antecedentes</header>
    <div clas="abs-center">
    <form action="editarfina.php?ID_FINANCIAMIENTO=<?php echo $_GET['ID_FINANCIAMIENTO']; ?>" method="POST" class="needs-validation" novalidate >
    <div class="titulo"> --  Proyecto --</div>
    <div class="row">
        
    <input type="text" class="form-control"  name="proyecto" required value="<?php echo $proyec; ?>">
        </div>
    </div>
    <div class="form-row ">
  
        <div class="col-md-4 mb-12">
            <label for="validarinver">Cual es su monto de inversión inicial<span class="red">*</span></label>
            <input type="text" class="form-control" name="inversion"  required value="<?php echo $inversion; ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarnomf">Nombre del financiamineto<span class="red">*</span></label>
            <input type="text" class="form-control" name="nomf" required value="<?php echo $nomf; ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validartipof">Tipo de financiemiento *</label>
            <input type="text" class="form-control" name="tipof"  required value="<?php echo $tipof; ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarsolvencia">Cuenta con solvencia<span class="red">*</span></label>
            <input type="text" class="form-control" name="solvencia"  required value="<?php echo $solvencia; ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validaropcredito">Conoce las opciones de cr&eacute;dito disponobles<span class="red">*</span></label>
            <input type="text" class="form-control" name="opcre"  required value="<?php echo $opcre; ?>">
        </div>
    </div>
  

    <br>

 
<div class="row">
        <div class="col-lg-12">
            <button class="btn btn-primary" name="modificarfina">Actualizar</button>
          <a  href="Registrofina.php" class="btn btn-danger">Cancelar</a>
        </div>
    </div>
    <br>

</form>

</div>
</div>

<!--Fin-->

<?php require_once "views/parte_inferior.php"?>