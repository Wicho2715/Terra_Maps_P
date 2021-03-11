<?php include("db/conexion.php"); ?>
<?php require_once "views/parte_superior.php"?>

<div class="container">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Perfil</h3>
            </div>
            <div class="card-body">
              <form class="user" action="actualizar_perfil.php" method="post">
                  <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="nombres">Nombres:</label>
                          <input type="text" class="form-control form-control-user" id="nombre" name="nombre" required
                              value="<?php $nombre= $_SESSION['nombre']; echo "$nombre";?>">
                      </div>
                      <div class="col-sm-6">
                        <label for="apellodo">Apellido:</label>
                          <input type="text" class="form-control form-control-user" id="apellido" name="apellido" required
                              value="<?php $apellido= $_SESSION['apellido']; echo "$apellido";?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                      <input type="email" class="form-control form-control-user" id="usuario" name="usuario" required
                          value="<?php $usuario= $_SESSION['usuario']; echo "$usuario";?>">
                  </div>
                  <div class="form-group row">

                  </div>
                  <input class="btn btn-success" type="submit" value="Guardar">
                  <a class="btn btn-success" href="cambiar_password.php">Cambiar contraseña</a>
                  <!--<a href="login.html" class="btn btn-primary btn-user btn-block">
                      Registrar
                  </a>-->
                  <hr>

                  <!--<a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Register with Google
                  </a>
                  <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                  </a>-->


              </form>

            </div>
        </div>
    </div>

<?php require_once "views/parte_inferior.php"?>
