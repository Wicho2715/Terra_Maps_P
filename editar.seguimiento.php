<?php

include("db/conexion.php");

$fechac = '';
$estadoc = '';
$idcontacto = '';


if  (isset($_GET['ID_SEGUIMIENTO'])) {
  $id = $_GET['ID_SEGUIMIENTO'];
  $query = "SELECT * FROM seguimiento WHERE ID_SEGUIMIENTO = $id";
  $resultado = mysqli_query($conn, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $fechac = $row['FECHA'];
    $estadoc = $row['ESTADO_CITA'];
    $idcontacto = $row['ID_CONTACTO'];
  }
}

if (isset($_POST['modificarse'])) {
  $id = $_GET['ID_SEGUIMIENTO'];
  $fechac= $_POST['fechac'];
  $estadoc = $_POST['estadoc'];
  $idcontacto = $_POST['idcontacto'];

  $query = "UPDATE seguimiento set FECHA = '$fechac', ESTADO_CITA = '$estadoc', ID_CONTACTO = '$idcontacto' WHERE ID_PUBLICIDAD = $id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Informacion Actualizada Correctamente';
  $_SESSION['message_type'] = 'primary';
  header('Location: seguimiento.php');
}
?>

<?php require_once "views/parte_superior.php"?>

<div class="container">
            <div class="card-header bg-info">
                <h3 class="text-white">Modificar Seguimiento</h3>
            </div>
    <div class="card card-body">
      <form action="editar.seguimiento.php?ID_SEGUIMIENTO=<?php echo $_GET['ID_SEGUIMIENTO']; ?>" method="POST">
      
        <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="fechac">Fecha del Seguimiento:</label> 
                <input name="fechac" type="date" class="form-control" value="<?php echo $fechac;?>">
              </div>
              <div class="col-md-6">
                <label for="estadoc">Estado de la Cita:</label> 
                <input name="estadoc" type="text" class="form-control" value="<?php echo $estadoc; ?>">
              </div> 
            </div> 
        </div>
        <div class="form-group">
          <div class="row">
              <div class="col-md-6">
                <label for="idcontacto">ID del Contacto:</label> 
                <input name="idcontacto" type="text" class="form-control" value="<?php echo $idcontacto;?>">
              </div>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-12">
            	<button class="btn btn-primary" name="modificarse">Actualizar</button>
                <a  href="seguimiento.php" class="btn btn-danger">Cancelar</a>
            </div>
    	</div>
      </form>
    </div>
</div>
<?php require_once "views/parte_inferior.php"?>                          