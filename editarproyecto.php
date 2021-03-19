
<?php

include("db/conexion.php");


  $nomproyec = ' ';
  $objetpro = ' ';
  $cliente = ' ';
  $puesto = ' ';
  $telefono = ' ';
  $planmkt = ' ';
  $plane = ' ';
  $recursoh = ' ';
  $estado2 = ' ';

if  (isset($_GET['ID_PROYECTO'])) {
  $id = $_GET['ID_PROYECTO'];
  $query = "SELECT * FROM proyecto_inicial WHERE ID_PROYECTO = $id";
  $resultado = mysqli_query($conn, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $nomproyec = $row['NOMBRE_PROYECTO'];
    $etapa1 = $row['ETAPA2'];
    $objetpro = $row["OBJETIVO"];
    $cliente = $row["ID_CLIENTE"];
    $puesto = $row["PUESTO"];
    $telefono = $row["TELEFONO"];
    $planmkt = $row["ESTRATEGIA_MKT"];
    $plane = $row["PLAN_ESTRATEGICO"];
    $recursoh = $row["RE_ACTUAL"];
    $estado2 = $row["ESTADO_PROYECTO"];
  }
}

if (isset($_POST['modificar'])) {
  $id = $_GET['ID_PROYECTO'];
  $nomproyec = $_POST["nomproyec"];
  $objetpro = $_POST["objetpro"];
  $cliente = $_POST["cliente"];
  $puesto = $_POST["puesto"];
  $telefono = $_POST["telefono"];
  $planmkt = $_POST["planmkt"];
  $plane = $_POST["plane"];
  $recursoh = $_POST["recursoh"];
  

  $query = "UPDATE proyecto_inicial set NOMBRE_PROYECTO = '$nomproyec', OBJETIVO = '$objetpro', ID_CLIENTE = '$cliente', PUESTO = '$puesto', TELEFONO = '$telefono', ESTRATEGIA_MKT = '$planmkt', PLAN_ESTRATEGICO = '$plane', RE_ACTUAL = '$recursoh' WHERE ID_PROYECTO = $id";
  mysqli_query($conn, $query);
  header('Location: editarproyectoinicial.php');
}
?>
<?php require_once "views/parte_superior.php"?>
<div class="container">
<header id="header"> Etapa 1 Proyecto Inicial</header>
    <div clas="abs-center">
    

    <form action="editarproyecto.php?ID_PROYECTO=<?php echo $_GET['ID_PROYECTO']; ?>" method="POST" class="needs-validation" novalidate >
    <div class="form-row mt-5">
    <div class="titulo"> --  Informaci&oacute;n General  --</div>
    <br>
        <div class="col-md-12 mb-12">
            <label for="validarNombrepro">Nombre del proyecto:<span class="red">*</span></label>
            <input type="text" class="form-control"  name="nomproyec" required value="<?php echo $nomproyec; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="valiobpro">Objetivo:<span class="red">*</span></label>
            <input type="text" class="form-control"  name="objetpro" required value="<?php echo $objetpro; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-12">
        <label for="valiobpro">Nombre del cliente:<span class="red">*</span></label>
        <input type="text" class="form-control"  name="cliente" required value="<?php echo $cliente; ?>">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="puesto">Puesto que desempe&ntilde;a</label>
            <input type="text" class="form-control"  name="puesto" required value="<?php echo $puesto; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="telefono">Telefono:</label>
            <input type="text" class="form-control"  name="telefono" required value="<?php echo $telefono; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="mkt">Cuenta con una estrategia de MKT</label>
            <input type="text" class="form-control"  name="planmkt" required value="<?php echo $planmkt; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="estrategico">Cuenta con un plan estrategico</label>
            <input type="text" class="form-control"  name="plane" required value="<?php echo $plane; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="estrategico">Describir el recurso humano con el que cuenta actualemnte</label>
            <input type="text" class="form-control"  name="recursoh" required value="<?php echo $recursoh; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>
    
   <br>

 
    <div class="row">
        	<div class="col-lg-12">
            	<button class="btn btn-primary" name="modificar">Actualizar</button>
              <a  href="proyectoinicial.php" class="btn btn-danger">Cancelar</a>
        	</div>
    	</div>
        <br>

</form>

</div>
</div>



<?php require_once "views/parte_inferior.php"?>