<?php
require 'db/conexion.php';
session_start();
$password_actual= $_POST['password_actual'];
$password_nueva= $_POST['password_nueva'];
$password_confirmada= $_POST['password_confirmada'];
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

if($password_nueva != $password_confirmada){ ?>
  <script type="text/javascript">
  swal.fire({
    title: "Error!",
    text: 'Las nuevas contraseñas no coinciden',
    icon: "error",
    button: "Ok!",
  }).then((result)=>{
    if(result.value){
      window.location="cambiar_password.php";
    }
  });
  </script>
<?php die();
}
$id= $_SESSION['id'];
$query= mysqli_query($conn, "SELECT * FROM login where ID_LOGIN=$id");
$datos= mysqli_fetch_array($query);
$password_actuall= $datos['PASSWORD'];
$password_decifrada= password_verify($password_actual, $password_actuall);
echo "password desifrada $password_decifrada";
if($password_actual != $password_decifrada){ ?>
  <script type="text/javascript">
  swal.fire({
    title: "Error!",
    text: 'La contraseña actua es incorrecta',
    icon: "error",
    button: "Ok!",
  }).then((result)=>{
    if(result.value){
      window.location="cambiar_password.php";
    }
  });
  </script>
<?php die();
}
if($password_decifrada== $password_actual){
  $password_cifrada= password_hash($password_nueva, PASSWORD_DEFAULT);
  $query= "UPDATE login SET PASSWORD='$password_cifrada'  WHERE ID_LOGIN='$id'";
  if($resultado=mysqli_query($conn, $query)){ echo "error4";
    ?>
    <script type="text/javascript">
    swal.fire({
      title: "Guardado",
      text: 'Contraseña actualizada',
      icon: "success",
      button: "Aceptar",
    }).then((result)=>{
      if(result.value){
        window.location="index.php";
      }
    });
    </script>
    <?php
    //echo "Registro almacenado en la BD";
    //header("Location:index.php");
  }else{ ?>
    <script type="text/javascript">
    swal.fire({
      title: "Error!",
      text: 'Error al actualizar la contraeña',
      icon: "error",
      button: "Ok!",
    }).then((result)=>{
      if(result.value){
        window.location="cambiar_password.php";
      }
    });

    </script>

    <?php
  }
}
mysqli_close($conn);
?>




</body>
</html>
