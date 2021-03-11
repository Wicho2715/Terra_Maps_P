<<<<<<< HEAD
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
=======
<?php require_once "views/parte_superior.php"?>

<!--Inicio-->
<div class = "container">
    <h1></h1>
>>>>>>> 9f6e177d8dd5846549f2b79c2cbedb3883c9793a

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
<<<<<<< HEAD
               

                  
=======
                <div class="row">

                    <div class="col-lg-5 d-none d-lg-block"><br> <br> <br><center><img src="img/nuevo_usuario.png"></center></div>
                    <div class="col-lg-7">
>>>>>>> 9f6e177d8dd5846549f2b79c2cbedb3883c9793a
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crea una cuenta!</h1>
                            </div>
<<<<<<< HEAD
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nombre(s)">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
=======
                            <form class="user" action="guardar_usuario.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nombre" name="nombre" required
                                            placeholder="Nombre(s)">
                                    </div>
                                    <div class="col-sm-6">
<<<<<<< HEAD
                                        <input type="text" class="form-control form-control-user" id="apellido" name="apellido" required
=======
                                        <input type="text" class="form-control form-control-user" id="apellido" name="apellido"
>>>>>>> 9f6e177d8dd5846549f2b79c2cbedb3883c9793a
>>>>>>> a611d20d7ae2878328cd74262fc958516d1ff67b
                                            placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="form-group">
<<<<<<< HEAD
                                    <input type="email" class="form-control form-control-user" id="usuario" name="usuario" required
=======
<<<<<<< HEAD
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Usuario">
=======
                                    <input type="email" class="form-control form-control-user" id="usuario" name="usuario"
>>>>>>> a611d20d7ae2878328cd74262fc958516d1ff67b
                                        placeholder="Email">
>>>>>>> 9f6e177d8dd5846549f2b79c2cbedb3883c9793a
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
<<<<<<< HEAD
                                            id="password" name="password" required placeholder="Contraseña">
=======
<<<<<<< HEAD
                                            id="exampleInputPassword" placeholder="Contraseña">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Confirmar contraseña">
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Registrar
                                </a>
                                <hr>


                            </form>
                         
                        </div>
                    
                </div>
            </div>
        </div>

    </div>


</body>

</html>
=======
                                            id="password" name="password" placeholder="Contraseña">
>>>>>>> a611d20d7ae2878328cd74262fc958516d1ff67b
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="conf_password" name="conf_password" required  placeholder="Confirmar contraseña">
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
                            <!--<hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Fin-->

<?php require_once "views/parte_inferior.php"?>
>>>>>>> 9f6e177d8dd5846549f2b79c2cbedb3883c9793a
