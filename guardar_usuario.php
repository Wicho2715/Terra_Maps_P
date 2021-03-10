<?php
require 'db/conexion.php';
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$usuario= $_POST['usuario'];
$password= $_POST['password'];
$conf_password= $_POST['conf_password'];

?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    </head>
  <body>
    <script src="vendor/jquery/jquery.easing-3.5.1.min.js"></script>
    <script src="vendor/pooper/pooper.min.js"></script>
    <script src="vendor/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="codigo_inicio_sesion.js"></script>
<?php

$consulta= "SELECT * FROM login WHERE USUARIO= '$usuario'";
$resultado= mysqli_query($conn, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas > 0){
      ?>
      <script type="text/javascript">
      swal.fire({
        title: "Error!",
        text: 'El usuario ya existe',
        icon: "error",
        button: "Ok!",
      }).then((result)=>{
        if(result.value){
          window.location="registrar_usuario.php";
        }
      });

      </script>

<?php }
if($password != $conf_password){ ?>
  <script type="text/javascript">
  swal.fire({
    title: "Error!",
    text: 'Las contraseñas no coinciden',
    icon: "error",
    button: "Ok!",
  }).then((result)=>{
    if(result.value){
      window.location="registrar_usuario.php";
    }
  });
  </script>
<?php
}
$password_cifrada= password_hash($password, PASSWORD_DEFAULT);
$query= "INSERT INTO login(NOMBRE, APELLIDO, USUARIO, PASSWORD) VALUES ('$nombre', '$apellido', '$usuario', '$password_cifrada')";
if($resultado=mysqli_query($conn, $query)){
  ?>
  <script type="text/javascript">
  swal.fire({
    title: "Guardado",
    text: 'Se guardo el usuario',
    icon: "success",
    button: "Aceptar",
  }).then((result)=>{
    if(result.value){
      window.location="registrar_usuario.php";
    }
  });
  </script>
  <?php

}else{ ?>
  <script type="text/javascript">
  swal.fire({
    title: "Error!",
    text: 'Error al guardar el usuario',
    icon: "error",
    button: "Ok!",
  }).then((result)=>{
    if(result.value){
      window.location="registrar_usuario.php";
    }
  });

  </script>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);
?>




</body>
</html>
