<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar Usuario Customer Assistant</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <br><br><br>
          <div class="card">

              <div class="card-header bg-info">
                  <h3 class="text-white">Crear cuenta!</h3>
              </div>
              <div class="card-body">
                <form class="user" action="guardar_usuario.php" method="post">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <label for="nombres">Nombre(s):</label>
                            <input type="text" class="form-control form-control-user" id="nombre" name="nombre" required
                                placeholder="Nombre(s)">
                        </div>
                        <div class="col-sm-6">
                          <label for="apellido">Apellido:</label>
                            <input type="text" class="form-control form-control-user" id="apellido" name="apellido" required
                                placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                        <input type="email" class="form-control form-control-user" id="usuario" name="usuario" required
                            placeholder="Email">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <label for="nombres">Contraseña</label>
                            <input type="password" class="form-control form-control-user"
                                id="password" name="password" required placeholder="Contraseña">
                        </div>
                        <div class="col-sm-6">
                          <label for="nombres">Confirmar contraseña</label>
                            <input type="password" class="form-control form-control-user"
                                id="conf_password" name="conf_password" required placeholder="Confirmar contraseña">
                        </div>
                    </div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" value="Guardar">
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
                <div class="text-center">
                    <a class="small" href="inicio_sesion.php">Iniciar sesion!</a>
                </div>

              </div>
          </div>
      </div>


</body>

</html>
