<?php include("db/conexion.php"); ?>
<?php require_once "views/parte_superior.php"?>
	
<div class="container">

				<?php if (isset($_SESSION['message'])) { ?>
					<div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
						<?= $_SESSION['message']?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php session_unset(); } ?>

        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Seguimientos</h3>
            </div>
            <div class="card-body">
				<form action="acciones/guardar.seguimiento.php" method="POST" class="needs-validation" novalidate>
				<div class="row">
        			<div class="col-lg-12">
            			<button type="submit" class="btn btn-success" name="guardarse">Guardar</button>
        			</div>
    			</div>
				<br>
				<div class="row">
                    <div class="col-md-6">
                        <label for="fechac">Fecha del Seguimiento:</label>
                        <input type="date" name="fechac"  class="form-control" placeholder="" value="" required>
                        <div class="valid-feedback">¡OK valido!</div>
                        <div class="invalid-feedback">Completar el campo.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="estadoc">Estado de la Cita:</label>
                        <input type="text" name="estadoc"  class="form-control" placeholder="" value="" required>
                        <div class="valid-feedback">¡OK valido!</div>
                        <div class="invalid-feedback">Completar el campo.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="idcontacto">ID del Contacto:</label>
                        <input type="text" name="idcontacto"  class="form-control" placeholder="" value="" required>
                        <div class="valid-feedback">¡OK valido!</div>
                        <div class="invalid-feedback">Completar el campo.</div>
                    </div>
                </div>
				</form>	
            </div>
            <div class="card-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table id="tablaSeguimiento" class="table table-striped table-bordered table-condensed" 
                                style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Fecha de Creacion</th>
                                            <th>Fecha del proximo seguimiento</th>
                                            <th>Estado de la Cita</th>
                                            <th>ID del Contacto</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$query = "SELECT * FROM seguimiento";
									$result_seguimiento = mysqli_query($conn, $query);    

									while($row = mysqli_fetch_assoc($result_seguimiento)) { ?>
									<tr>
										<td><?php echo $row['ID_SEGUIMIENTO']; ?></td>
										<td><?php echo $row['FECHA_SEGUIMIENTO']; ?></td>
										<td><?php echo $row['FECHA']; ?></td>
										<td><?php echo $row['ESTADO_CITA']; ?></td>
										<td><?php echo $row['ID_CONTACTO']; ?></td>
										<td>
										<a href="editar.seguimiento.php?ID_SEGUIMIENTO=<?php echo $row['ID_SEGUIMIENTO']?>" class="btn btn-primary">
										<i class="fas fa-marker"></i>
										</a>
										<a href="acciones/borrar.seguimiento.php?ID_SEGUIMIENTO=<?php echo $row['ID_SEGUIMIENTO']?>" class="btn btn-danger">
										<i class="far fa-trash-alt"></i>
										</a>
										</td>
									</tr>
									<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	

<?php require_once "views/parte_inferior.php"?>
