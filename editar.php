<?php

include("db/conexion.php");

$nombre = '';
$cargo = '';
$dependencia = '';
$email = '';
$movil = '';
$estado = '';

if  (isset($_GET['ID_CLIENTE'])) {
  $id = $_GET['ID_CLIENTE'];
  $query = "SELECT * FROM clientes WHERE ID_CLIENTE = $id";
  $resultado = mysqli_query($conn, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $nombre = $row['NOMBRE'];
    $cargo = $row['CARGO'];
    $dependencia = $row['DEPENDENCIA'];
    $email = $row['EMAIL'];
    $movil = $row['MOVIL'];
    $estado = $row['ESTADO'];
  }
}

if (isset($_POST['modificar'])) {
  $id = $_GET['ID_CLIENTE'];
  $nombre= $_POST['nombre'];
  $cargo = $_POST['cargo'];
  $dependencia= $_POST['dependencia'];
  $email = $_POST['email'];
  $movil= $_POST['movil'];
  $estado = $_POST['estado'];

  $query = "UPDATE clientes set NOMBRE = '$nombre', CARGO = '$cargo', DEPENDENCIA = '$dependencia', EMAIL = '$email', MOVIL = '$movil', ESTADO = '$estado' WHERE ID_CLIENTE = $id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Informacion Actualizada Correctamente';
  $_SESSION['message_type'] = 'primary';
  header('Location: clientes.php');
}
?>

<?php require_once "views/parte_superior.php"?>

<div class="container">
            <div class="card-header bg-info">
                <h3 class="text-white">Modificar Clientes y/o Prospectos</h3>
            </div>
    <div class="card card-body">
      <form action="editar.php?ID_CLIENTE=<?php echo $_GET['ID_CLIENTE']; ?>" method="POST">
      
        <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="nombre">Nombres:</label> 
                <input name="nombre" type="text" class="form-control" value="<?php echo $nombre;?>">
              </div>
              <div class="col-md-6">
                <label for="cargo">Cargo:</label> 
                <input name="cargo" type="text" class="form-control" value="<?php echo $cargo; ?>">
              </div> 
            </div> 
        </div>
        <div class="form-group">
          <div class="row">
              <div class="col-md-6">
                <label for="dependencia">Dependencia:</label> 
                <input name="dependencia" type="text" class="form-control" value="<?php echo $dependencia;?>">
              </div>
              <div class="col-md-6">
                <label for="email">Email:</label> 
                <input name="email" type="text" class="form-control" value="<?php echo $email; ?>">
              </div> 
          </div>
        </div>
        <div class="form-group">
          <div class="row">
              <div class="col-md-6">
                <label for="movil">Movil:</label> 
                <input name="movil" type="text" class="form-control" value="<?php echo $movil;?>">
              </div>
              <div class="col-md-6">
                <label for="estado">Estado:</label> 
                <input name="estado" type="text" class="form-control" value="<?php echo $estado; ?>">
              </div> 
          </div> 
        </div>
        <div class="row">
        	<div class="col-lg-12">
            	<button class="btn btn-primary" name="modificar">Actualizar</button>
              <a  href="clientes.php" class="btn btn-danger">Cancelar</a>
        	</div>
    	</div>
      </form>
    </div>
</div>
<?php require_once "views/parte_inferior.php"?>