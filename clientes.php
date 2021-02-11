<?php require_once "views/parte_superior.php"?>
<!--Inicio-->
<div class="container">
	<h1>Clientes y/o Prospectos</h1>

<?php
include_once '/bd/conexion.php';
$objeto = new Conexion();
$conexion =$objeto->Conectar();
$consulta = "SELECT FROM clientes";
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<div class = "container">
    <div class="row">
    	<div class="col-lg-12">
    		<button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>
    	</div>
    </div>
</div>
<br>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table id="tablaClientes" class="table table-striped table-bordered table-condensed" style="width: 100%">
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($data as $dat) {
						 	# code...
						  ?>
						  <tr>
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
						  	<td></td>
						  </tr>
						  <?php
						  	}
						  ?> 
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- Modal Crud-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formClientes">
				<div class="modal-body">
					<div class="form-group">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
						<label for="nombre" class="col-form-label"></label>
						<input type="text" name="form-control" id="nombre">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
					<button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--Fin-->
</div>

<?php require_once "views/parte_inferior.php"?>

