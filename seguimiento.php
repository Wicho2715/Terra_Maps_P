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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaSeguimiento" class="table table-striped table-bordered table-condensed" style="width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha de proximo contacto</th>
                                <th>Nombre del contacto</th>
                                <th>Terminos</th>
                                <th>Estado de la cita</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>00001</td>
                                <td>05/02/2021</td>
                                <td>Jose Luis</td>
                                <td>Terminos del proyecto</td>
                                <td>En curso</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Fin-->

<?php require_once "views/parte_inferior.php"?>