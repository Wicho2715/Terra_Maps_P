<?php

include("db/conexion.php");

$nombrepu = '';
$tipopu = '';
$descripcion = '';


if  (isset($_GET['ID_PUBLICIDAD'])) {
  $id = $_GET['ID_PUBLICIDAD'];
  $query = "SELECT * FROM publicidad WHERE ID_PUBLICIDAD = $id";
  $resultado = mysqli_query($conn, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $nombrepu = $row['NOMBRE_PU'];
    $tipopu = $row['TIPO'];
    $descripcion = $row['DESCRIPCION'];
  }
}

if (isset($_POST['modificarpu'])) {
  $id = $_GET['ID_PUBLICIDAD'];
  $nombrepu= $_POST['nombrepu'];
  $tipopu = $_POST['tipopu'];
  $descripcion = $_POST['descripcion'];

  $query = "UPDATE publicidad set NOMBRE_PU = '$nombrepu', TIPO = '$tipopu', DESCRIPCION = '$descripcion' WHERE ID_PUBLICIDAD = $id";
  mysqli_query($conn, $query);
  header('Location: contacto.php');
}
?>

<?php require_once "views/parte_superior.php"?>

<div class="container">
            <div class="card-header bg-info">
                <h3 class="text-white">Modificar Publicidad</h3>
            </div>
    <div class="card card-body">
      <form action="editar.publicidad.php?ID_PUBLICIDAD=<?php echo $_GET['ID_PUBLICIDAD']; ?>" method="POST" class="needs-validation" novalidate>
      
        <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="nombrepu">Nombre Publicidad:</label> 
                <input name="nombrepu" type="text" class="form-control" placeholder="" required value="<?php echo $nombrepu;?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div>
              <div class="col-md-6">
                <label for="tipopu">Tipo:</label> 
                <input name="tipopu" type="text" class="form-control" placeholder="" required value="<?php echo $tipopu; ?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div> 
            </div> 
        </div>
        <div class="form-group">
          <div class="row">
              <div class="col-md-6">
                <label for="descripcion">Descripcion:</label> 
                <input name="descripcion" type="text" class="form-control" placeholder="" required value="<?php echo $descripcion;?>">
                <div class="valid-feedback">¡OK valido!</div>
                <div class="invalid-feedback">Completar el campo.</div>
              </div>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-12">
            	<button class="btn btn-primary" name="modificarpu">Actualizar</button>
                <a  href="contacto.php" class="btn btn-danger">Cancelar</a>
            </div>
    	</div>
      </form>
    </div>
</div>
<?php require_once "views/parte_inferior.php"?>