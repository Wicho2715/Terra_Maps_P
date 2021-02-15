<?php require_once "views/parte_superior.php"?>
<!--Inicio-->
<div class="container">
	<h1>Clientes y/o Prospectos</h1>

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
							<th>ID</th>
							<th>Nombre</th>
							<th>Cargo</th>
							<th>Dependencia</th>
							<th>Email</th>
							<th>Telefono</th>
							<th>Estado</th>
							<th>Tipo de contacto</th>
							<th>Destinatario</th>
							<th>Asunto</th>
							<th>Resumen</th>
							<th>Fecha Contacto</th>
							<th>Nombre Contacto</th>
							<th>Acuerdo</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						
						  <tr>
						  	<td>00014</td>
						  	<td>Jose Luis</td>
						  	<td>El mero mero</td>
						  	<td>Gobierno</td>
						  	<td>wg2715wg@gmail.com</td>
						  	<td>7751655669</td>
						  	<td>Email</td>
						  	<td>7751655669</td>
						  	<td>Check Proyecto</td>
						  	<td>Mi proyecto es un ejemplo</td>
						  	<td>Este proyecto es un ejemplo</td>
						  	<td>27/2/2021</td>
						  	<td>Jose Luis</td>
						  	<td>Todos los acuerdos</td>
						  	<td></td>
						  </tr>
						 
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- Modal Crud-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formClientes">
				<div class="modal-body">
					<div class="form-group">
						<label for="nombre" class="col-form-label">Nombre</label>
						<input type="text" name="form-control" id="nombre"><br>
						<label for="cargo" class="col-form-label">Cargo</label>
						<input type="text" name="form-control" id="cargo"><br>
						<label for="dependencia" class="col-form-label">Dependencia</label>
						<input type="text" name="form-control" id="dependencia"><br>
						<label for="email" class="col-form-label">Email</label>
						<input type="email" name="form-control" id="email"><br>
						<label for="telefono" class="col-form-label">Telefono</label>
						<input type="tel" name="form-control" id=telefono><br>
						<label for="estado" class="col-form-label">Estado</label>
						<input type="text" name="form-control" id="estado"><br>
						<label for="tipoc" class="col-form-label">Tipo de contacto</label>
						<input type="text" name="form-control" id="tipoc"><br>
						<label for="destinatario" class="col-form-label">Destinatario</label>
						<input type="text" name="form-control" id="destinatario"><br>
						<label for="asunto" class="col-form-label">Asunto</label>
						<input type="text" name="form-control" id="asunto"><br>

						<label for="resumen" class="col-form-label">Resumen</label>
						<input type="text" name="form-control" id="resumen"><br>
						<label for="fechac" class="col-form-label">Fecha del Proximo Contacto</label>
						<input type="text" name="form-control" id="fechac"><br>
						<label for="nombrec" class="col-form-label">Nombre del Contacto</label>
						<input type="text" name="form-control" id="nombrec"><br>
						<label for="acuerdo" class="col-form-label">Acuerdo</label>
						<input type="text" name="form-control" id="acuerdo"><br>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					<button type="submit" id="btnGuardar" class="btn btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--Fin-->
</div>

<?php require_once "views/parte_inferior.php"?>

