<?php include("db/conexion.php"); ?>
<?php require_once "views/parte_superior.php"?>

<div class="container">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Cambiar contraseña</h3>
            </div>
            <div class="card-body">
              <form class="user" action="actualizar_password.php" method="post">
                  <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="nombres">Contraseña actual:</label>
                        <input type="password" class="form-control form-control-user"
                            id="password_actual" name="password_actual" required placeholder="Contraseña actual">
                      </div>
                      <div class="col-sm-6">
                        <label for="nombres">Contraseña nueva:</label>
                        <input type="password" class="form-control form-control-user"
                            id="password_nueva" name="password_nueva" required placeholder="Contraseña nueva">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="nombres">Confirmar nueva contraseña:</label>
                    <input type="password" class="form-control form-control-user"
                        id="password_confirmada" name="password_confirmada" required placeholder="Confirmar nueva contraseña">
                  </div>
                  <div class="form-group row">

                  </div>
                  <input class="btn btn-success" type="submit" value="Guardar">
                  <a class="btn btn-success" href="perfil.php">Actualizar perfil</a>
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
