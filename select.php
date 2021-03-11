<?php
    include ("bd/conexion.php");
    
    
    $query=mysqli_query($conn,"SELECT ID_CLIENTE, NOMBRE FROM clientes");
?>

<html>
<head>
</head>
<body>

<form action="" >
    <div>
    <select name="nomre">
    <?php 
        while($datos = mysqli_fetch_array($query))
        {
    ?>
            <option value="<?php echo $datos['ID_CLIENTE']?>"> <?php echo $datos['NOMBRE']?> </option>
    <?php
        }
    
    ?>

    </select>
    
</form>
</div>
</body>
</html>