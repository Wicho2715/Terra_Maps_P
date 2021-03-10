<div id="clientes">
    <label> <select name="" class="form-control">

    <?php
        include 'bd/conexion.php';

        $consulta= "SELECT * FROM clientes";
        $ejecutar=mysqlli_query($conexion,$consulta) or die(mysqli_error($conexion));
        
    ?>

    <?php foreach ($ejecutar as $opciones): ?>
    
        <option value="<?php echo $opciones['NOMBRE']?>"></option>

    <?php endforeach ?>

    </select></label>
   </div>
