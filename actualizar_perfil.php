<?php
require 'db/conexion.php';
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$usuario= $_POST['usuario'];
$id= $_SESSION['id'];
$usuariog= $_SESSION['usuario'];
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
<?php

$consulta= "SELECT * FROM login WHERE USUARIO= '$usuario'";
$resultado= mysqli_query($conn, $consulta);
$filas=mysqli_num_rows($resultado);
if ($usuariog != $usuario) {
  if($filas > 0){?>
        <script type="text/javascript">
        swal.fire({
          title: "Error!",
          text: 'El usuario ya existe',
          icon: "error",
          button: "OK!",
        }).then((result)=>{
          if(result.value){
            window.location="perfil.php";
          }
        });
        </script>

  <?php die();
  }
}

$query= "UPDATE login SET NOMBRE= '$nombre', APELLIDO= '$apellido', USUARIO= '$usuario' WHERE ID_LOGIN= '$id'";
if($resultado=mysqli_query($conn, $query)){
  $_SESSION['usuario']= $usuario;
  $_SESSION['nombre']= $nombre;
  $_SESSION['apellido']= $apellido;
  ?>
  <script type="text/javascript">
  swal.fire({
    title: "Guardado",
    text: 'Perfil actualizado',
    icon: "success",
    button: "Aceptar",
  }).then((result)=>{
    if(result.value){
      window.location="index.php";
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
