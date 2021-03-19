<?php include("db/conexion.php"); ?>
<?php require_once "views/parte_superior.php"?>

<div class="container">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Clientes/Prospectos</h3>
            </div>
            <div class="card-body">
				<form action="acciones/guardar.php" method="POST" class="needs-validation" novalidate>
				<div class="row">
        			<div class="col-lg-12">
            			<button type="submit" class="btn btn-success" name="guardar">Guardar</button>
        			</div>
    			</div>
				<br>
				<div class="row">
                    <div class="col-md-6">
                        <label for="nombre">Nombre del cliente:</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre completo "  required>
                        <div class="valid-feedback">¡OK valido!</div>
                        <div class="invalid-feedback">Completar el campo.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="cargo">Cargo:</label>
                        <input type="text" name="cargo"  class="form-control" placeholder="Cargo que desempeña"  required>
                        <div class="valid-feedback">¡OK valido!</div>
                        <div class="invalid-feedback">Completar el campo.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="dependencia">Dependencia:</label>
                        <input type="text" name="dependencia"  class="form-control" placeholder="Dependencia a la que pertenece"  required>
                        <div class="valid-feedback">¡OK valido!</div>
                        <div class="invalid-feedback">Completar el campo.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" name="email"  class="form-control" placeholder="Correo electronico" required>
                        <div class="valid-feedback">¡OK valido!</div>
                        <div class="invalid-feedback">Completar el campo.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="movil">Telefono:</label>
                        <input type="text" name="movil"  class="form-control" placeholder="Telefono movil" required>
                        <div class="valid-feedback">¡OK valido!</div>
                        <div class="invalid-feedback">Completar el campo.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="estado">Estado del Cliente:</label>
												<select class="form-control" name="estado" id="" required >
                            <option value="">Estado del cliente</option>
                        		<option value="Cliente">Cliente</option>
														<option value="Prospecto">Prospecto</option>
                        </select>
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
                                <table class="table table-striped table-bordered table-condensed" id="tablaClientes" width="100%" cellspacing="0">
                                <!--class="table table-striped table-bordered table-condensed" style="width: 100%"-->
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre del cliente</th>
                                            <th>Cargo</th>
                                            <th>Dependencia</th>
                                            <th>Email</th>
                                            <th>Movil</th>
                                            <th>Estado</th>
                                            <th>Fecha de registro</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                    $query = "SELECT * FROM clientes";
									$result_clientes = mysqli_query($conn, $query);

									while($row = mysqli_fetch_assoc($result_clientes)) { ?>
									<tr>
										<td><?php echo $row['ID_CLIENTE']; ?></td>
										<td><?php echo $row['NOMBRE']; ?></td>
										<td><?php echo $row['CARGO']; ?></td>
										<td><?php echo $row['DEPENDENCIA']; ?></td>
										<td><?php echo $row['EMAIL']; ?></td>
                                        <td><?php echo $row['MOVIL']; ?></td>
										<td><?php echo $row['ESTADO']; ?></td>
                                        <td><?php echo $row['FECHA']; ?></td>
										<td>
										<a href="editar.php?ID_CLIENTE=<?php echo $row['ID_CLIENTE']?>" class="btn btn-primary">
										<i class="fas fa-marker"></i>
										</a>
										<a href="acciones/borrar.php?ID_CLIENTE=<?php echo $row['ID_CLIENTE']?>" class="btn btn-danger">
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
