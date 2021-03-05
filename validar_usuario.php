<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    </head>
  <body>
    <script src="vendor/jquery/jquery.easing-3.5.1.min.js"></script>
    <script src="vendor/pooper/pooper.min.js"></script>
    <script src="vendor/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<?php
require 'conexion.php';
session_start();

$usuario= $_POST['usuario'];
$password= $_POST['password'];

/*
echo "$usuario";
echo "$password";
$consulta= $conexion->query("SELECT * FROM usuarios WHERE usuario= '$usuario' AND password= '$password'");
if($resultado= mysqli_fetch_array($consulta)){
    $_SESSION['username']= $usuario;
    echo "Bienvenido";
}else {
  echo "Datos Incorrectos";

}*/
$query= "SELECT * FROM login WHERE USUARIO= '$usuario'";
if($result=mysqli_query($conexion, $query)){
  while($row= $result->fetch_assoc()){
    $password_dec= $row['PASSWORD'];
    $nombre= $row['NOMBRE'];
    $apellido_p= $row['APELLIDO'];
    $password_decifrada= password_verify($password, $password_dec);
  }

}else{ ?>
  <script type="text/javascript">
  swal.fire({
    title: "Error!",
    text: 'El usuario no existe',
    icon: "error",
    button: "Ok!",
  }).then((result)=>{
    if(result.value){
      window.location="inicio_sesion.php";
    }
  })
  </script>
  <?php
  }

$consulta= "SELECT * FROM login WHERE USUARIO= '$usuario'";
$resultado= mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas > 0  && $password_decifrada== $password){
  $_SESSION['username']= $usuario;
  $_SESSION['nombre']= $nombre;
  $_SESSION['apellido']= $apellido;
  ?>
  <script type="text/javascript">
  swal.fire({
    title: "Bienvenido",
    text: "",
    icon: "success",
    button: "Aceptar",
  }).then((result)=>{
    if(result.value){
      window.location="index.php";
    }
  })
  </script>
  <!--header("Location:inicio.php");-->
<?php }else {?>
  <script type="text/javascript">
  swal.fire({
    title: "Error!",
    text: "El usuario y el password son incorrectos",
    icon: "error",
    button: "Ok!",
  }).then((result)=>{
    if(result.value){
      window.location="inicio_sesion.php";
    }
  })
  </script>
  <?php
  //sleep(15);
  //header("Location:index.php");

}
mysqli_free_result($resultado);
mysqli_close($conexion);
 ?>



</body>
</html>
