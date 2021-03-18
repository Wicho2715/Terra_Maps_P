<?php

include("db/conexion.php");

$fechac = '';
$estadoc = '';



if  (isset($_GET['ID_SEGUIMIENTO'])) {
  $id = $_GET['ID_SEGUIMIENTO'];
  $query = "SELECT FECHA, ESTADO_CITA FROM seguimiento WHERE ID_SEGUIMIENTO = $id";
  $resultado = mysqli_query($conn, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $fechac = $row['FECHA'];
    $estadoc = $row['ESTADO_CITA'];
  }
}

if (isset($_POST['modificar'])) {
  $id = $_GET['ID_SEGUIMIENTO'];
  $fechac= $_POST['fechac'];
  $estadoc = $_POST['estadoc'];
 

  $query = "UPDATE seguimiento set FECHA = '$fechac', ESTADO_CITA = '$estadoc' WHERE ID_SEGUIMIENTO = $id";
  mysqli_query($conn, $query);
  header('Location: seguimiento.php');
}
?>

<?php require_once "views/parte_superior.php"?>

<div class="container">
            <div class="card-header bg-primary">
                <h3 class="text-white">Modificar Seguimiento</h3>
            </div>
    <div class="card card-body">
      <form action="editar.seguimiento.php?ID_SEGUIMIENTO=<?php echo $_GET['ID_SEGUIMIENTO']; ?>" method="POST" class="needs-validation" novalidate>
      
        <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="fechac">Fecha del Seguimiento:</label> 
                <input name="fechac" type="date" class="form-control" placeholder="" required value="<?php echo $fechac;?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div>
              <div class="col-md-6">
                <label for="estadoc">Estado de la Cita:</label> 
                <input name="estadoc" type="text" class="form-control" placeholder="" required value="<?php echo $estadoc; ?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div> 
            </div> 
        </div>
        <div class="row">
        	<div class="col-lg-12">
            	<button class="btn btn-primary" name="modificar">Actualizar</button>
                <a  href="seguimiento.php" class="btn btn-danger">Cancelar</a>
            </div>
    	</div>
      </form>
    </div>
</div>
<?php require_once "views/parte_inferior.php"?>                          