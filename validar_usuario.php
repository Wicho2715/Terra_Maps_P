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
require 'db/conexion.php';
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
if($result=mysqli_query($conn, $query)){
  while($row= $result->fetch_assoc()){
    $id= $row['ID_LOGIN'];
    $nombre= $row['NOMBRE'];
    $apellido= $row['APELLIDO'];
    $password_dec= $row['PASSWORD'];
    $usuario= $row['USUARIO'];
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
$resultado= mysqli_query($conn, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas > 0  && $password_decifrada== $password){
  $fecha= date("Y-m-d");
  $query= mysqli_query($conn, "SELECT ID_CONTACTO, ASUNTO, DESTINATARIO, FECHA_PC, NOMBRE_CONTACTO FROM contacto
            WHERE FECHA_PC LIKE '%".$fecha."%' AND ESTADO LIKE 'Activo'");
          $num_notif= mysqli_num_rows($query);
          if ($num_notif=="0") {
          }
          $asunto= array();
          $id_contacto= array();
          $destinatario= array();
          $fecha_pc= array();
          $nombre_contacto= array();
          $cont = 0;
          while($row = mysqli_fetch_assoc($query)) {
            $id_contacto[$cont] = $row['ID_CONTACTO'];
            $asunto[$cont] = $row['ASUNTO'];
            $destinatario[$cont] = $row['DESTINATARIO'];
            $fecha_pc[$cont] = $row['FECHA_PC'];
            $nombre_contacto[$cont] = $row['NOMBRE_CONTACTO'];
            $cont++;
          }
  $_SESSION['id_contacto']= $id_contacto;
  $_SESSION['asunto']= $asunto;
  $_SESSION['destinatario']= $destinatario;
  $_SESSION['fecha_pc']= $fecha_pc;
  $_SESSION['nombre_contacto']= $nombre_contacto;
  $_SESSION['num_notif']= $num_notif;
  $_SESSION['usuario']= $usuario;
  $_SESSION['nombre']= $nombre;
  $_SESSION['apellido']= $apellido;
  $_SESSION['id']= $id;
  $ip= $_SERVER['SERVER_ADDR'];
  $query= "INSERT INTO sesions(IP, ID_LOGIN) VALUES ('$ip', '$id')";
  if($resultado=mysqli_query($conn, $query)){


  }
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
mysqli_close($conn);
 ?>



</body>
</html>
