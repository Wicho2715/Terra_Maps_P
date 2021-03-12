<?php

include("db/conexion.php");

$tipoc = '';
$destinatario = '';
$asunto = '';
$resumen = '';
$fechac = '';
$nombrec = '';
$acuerdo = '';

if  (isset($_GET['ID_CONTACTO'])) {
  $id = $_GET['ID_CONTACTO'];
  $query = "SELECT TIPO_CONTACTO, DESTINATARIO, ASUNTO, RESUMEN, FECHA_PC, NOMBRE_CONTACTO, ACUERDO FROM contacto WHERE ID_CONTACTO = $id";
  $resultado = mysqli_query($conn, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $tipoc = $row['TIPO_CONTACTO'];
    $destinatario = $row['DESTINATARIO'];
    $asunto = $row['ASUNTO'];
    $resumen = $row['RESUMEN'];
    $fechac = $row['FECHA_PC'];
    $nombrec = $row['NOMBRE_CONTACTO'];
    $acuerdo = $row['ACUERDO'];
  }
}

if (isset($_POST['modificar'])) {
  $id = $_GET['ID_CONTACTO'];
  $tipoc= $_POST['tipoc'];
  $destinatario = $_POST['destinatario'];
  $asunto = $_POST['asunto'];
  $resumen = $_POST['resumen'];
  $fechac = $_POST['fechac'];
  $nombrec = $_POST['nombrec'];
  $acuerdo = $_POST['acuerdo'];

  $query = "UPDATE contacto set TIPO_CONTACTO = '$tipoc', DESTINATARIO = '$destinatario', ASUNTO = '$asunto', RESUMEN = '$resumen', FECHA_PC = '$fechac', NOMBRE_CONTACTO = '$nombrec', ACUERDO = '$acuerdo' WHERE ID_CONTACTO = $id";
  mysqli_query($conn, $query);
  header('Location: contacto.php');
}
?>

<?php require_once "views/parte_superior.php"?>

<div class="container">
            <div class="card-header bg-info">
                <h3 class="text-white">Modificar Contacto</h3>
            </div>
    <div class="card card-body">
      <form action="editar.contacto.php?ID_CONTACTO=<?php echo $_GET['ID_CONTACTO']; ?>" method="POST" class="needs-validation" novalidate>
      
        <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="tipoc">Tipo Contacto:</label> 
                <input name="tipoc" type="text" class="form-control" placeholder="" required value="<?php echo $tipoc;?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div>
              <div class="col-md-6">
                <label for="destinatario">Destinatario:</label> 
                <input name="destinatario" type="text" class="form-control" placeholder="" required value="<?php echo $destinatario; ?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div> 
            </div> 
        </div>
        <div class="form-group">
          <div class="row">
              <div class="col-md-6">
                <label for="asunto">Asunto:</label> 
                <input name="asunto" type="text" class="form-control" placeholder="" required value="<?php echo $asunto;?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div>
              <div class="col-md-6">
                <label for="resumen">Resumen:</label> 
                <input name="resumen" type="text" class="form-control" placeholder="" required value="<?php echo $resumen; ?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div> 
          </div>
        </div>
        <div class="form-group">
          <div class="row">
              <div class="col-md-6">
                <label for="fechac">Fecha del proximo Contacto:</label> 
                <input name="fechac" type="date" class="form-control" placeholder="" required value="<?php echo $fechac;?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div>
              <div class="col-md-6">
                <label for="nombrec">Nombre del Contacto:</label> 
                <input name="nombrec" type="text" class="form-control" placeholder="" required value="<?php echo $nombrec; ?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div> 
          </div> 
        </div>
        <div class="form-group">
          <div class="row">
              <div class="col-md-6">
                <label for="acuerdo">Acuerdos:</label> 
                <input name="acuerdo" type="text" class="form-control" placeholder="" required value="<?php echo $acuerdo;?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div>
          </div> 
        </div>
        <div class="row">
        	<div class="col-lg-12">
            	<button class="btn btn-primary" name="modificar">Actualizar</button>
              <a  href="contacto.php" class="btn btn-danger">Cancelar</a>
        	</div>
    	</div>
      </form>
    </div>
</div>
<?php require_once "views/parte_inferior.php"?>