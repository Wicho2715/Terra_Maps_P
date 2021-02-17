<?php
include_once '/bd/conexion.php';
$objeto = new Conexion();
$conexion =$objeto->Conectar();
$consulta = "SELECT  FROM clientes";
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<?php 
						foreach ($data as $dat) {
						 	# code...
						  ?>
<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>
						  	<td><?php echo $dat[''] ?></td>

  <?php
						  	}
						  ?>


						  