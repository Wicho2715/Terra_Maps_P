<?php require_once "views/parte_superior.php"?>

<!--Inicio-->

<div class = "container">
    <h1>Seguimientos</h1>
    <div class="modal fade" tabindex="-1" id="modalSeguimiento">
    	<div class="modal-dialog modal-lg">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLabel">Nuevo Seguimiento</h5>
    				<button class="close" data-dismiss="modal">&times;</button>
    			</div>
    			<form id="formSeguimiento">
    				<div class="modal-body">
    					<div class="form-group">
    					<label for="fechads" class="col-form-label">Fecha de Seguimiento</label>
    					<input type="date" class="form-control" name="form-control" id="fechads"><br>
    					<label for="nombredc" class="col-form-label">Nombre del Contacto</label>
						<input type="text" 
						class="form-control" name="form-control" id="nombredc"><br>
						<label for="terminosdc" class="col-form-label">Terminos</label>
						<input type="text-area" class="form-control" name="form-control" id="terminosdc"><br>
						<label for="estadodc" class="col-form-label">Estado de la Cita</label>
						<input type="text" class="form-control" name="form-control" id="estadodc"><br>
						
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
    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modalSeguimiento" id="btnNuevos">Nuevo</button>
</div>

<!--Fin-->

<?php require_once "views/parte_inferior.php"?>