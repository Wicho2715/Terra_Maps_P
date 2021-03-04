<?php require_once "views/parte_superior.php"?>

<!--Inicio-->

<div class="container">
    <h3>Seguimientos</h3>

<div class = "container">
    <div class="row">
        <div class="col-lg-12">
            <button id="btnNuevos" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="tablaSeguimiento" class="table table-striped table-bordered table-condensed" style="width: 100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Fecha de contacto</th>
                            <th>Nombre del Contacto</th>
                            <th>Acuerdos</th>
                            <th>Estado de la cita</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal Crud-->
<div class="modal fade" id="modalSeguimiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                
                </button>
            </div>
            <form id="formSeguimiento">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="fechadc" class="col-form-label" >Fecha del proximo contacto</label>
                        <input type="date" class="form-control" name="form-control" id="fechadc"><br>
                        <label for="nombredc" class="col-form-label">Nombre del Contacto</label>
                        <input type="text" class="form-control" name="form-control" id="nombredc"><br>
                        <label for="terminosdc" class="col-form-label">Terminos</label>
                        <input type="text" class="form-control" name="form-control" id="terminosdc"><br>
                        <label for="estadodc" class="col-form-label">Estado de la cita</label>
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
<!--Fin-->
</div>

<!--Fin-->

<?php require_once "views/parte_inferior.php"?>