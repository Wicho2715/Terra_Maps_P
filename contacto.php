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
                <h3 class="text-white">Contactos</h3>
            </div>
            <div class="card-body">
				<form action="acciones/guardar.contacto.php" method="POST">
				<div class="row">
        			<div class="col-lg-12">
            			<button type="submit" class="btn btn-success" name="guardar">Guardar</button>
        			</div>
    			</div>
				<br>
				<div class="row">
                    <div class="col-md-6">
                        <label for="tipocontacto">Tipo de contacto:</label>
                        <input type="text" name="tipocontacto"  class="form-control" autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="destinatario">Destinatario:</label>
                        <input type="text" name="destinatario"  class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="asunto">Asunto:</label>
                        <input type="text" name="asunto"  class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="resumen">Resumen:</label>
                        <input type="text" name="resumen"  class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="fechac">Fecha del proximo Contacto:</label>
                        <input type="date" name="fechac"  class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="nombrec">Nombre del Contacto:</label>
                        <input type="text" name="nombrec"  class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="acuerdo">Acuerdos:</label>
                        <input type="text" name="acuerdo"  class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label for="idcliente">ID del Cliente:</label>
                        <input type="text" name="idcliente"  class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="idpublicidad">ID de la Publicidad:</label>
                        <input type="text" name="idpublicidad"  class="form-control" >
                     </div>  
                </div>
				</form>	
                
            </div>
            <div class="card-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table id="tablaContacto" class="table table-striped table-bordered table-condensed" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tipo de Contacto</th>
                                            <th>Destinatario</th>
                                            <th>Asunto</th>
                                            <th>Resumen</th>
                                            <th>Fecha de Captura</th>
                                            <th>Fecha del proximo contacto</th>
                                            <th>Nombre del Contacto</th>
                                            <th>Acuerdos</th>
                                            <th>ID del Cliente</th>
                                            <th>ID de la Publicidad</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$query = "SELECT * FROM contacto";
									$result_contacto = mysqli_query($conn, $query);    

									while($row = mysqli_fetch_assoc($result_contacto)) { ?>
									<tr>
										<td><?php echo $row['ID_CONTACTO']; ?></td>
										<td><?php echo $row['TIPO_CONTACTO']; ?></td>
										<td><?php echo $row['DESTINATARIO']; ?></td>
										<td><?php echo $row['ASUNTO']; ?></td>
										<td><?php echo $row['RESUMEN']; ?></td>
										<td><?php echo $row['FECHA_CONTACTO']; ?></td>
										<td><?php echo $row['FECHA_PC']; ?></td>
                                        <td><?php echo $row['NOMBRE_CONTACTO']; ?></td>
										<td><?php echo $row['ACUERDO']; ?></td>
										<td><?php echo $row['ID_CLIENTE']; ?></td>
										<td><?php echo $row['ID_PUBLICIDAD']; ?></td>
										<td>
										<a href="editar.contacto.php?ID_CONTACTO=<?php echo $row['ID_CONTACTO']?>" class="btn btn-primary">
										<i class="fas fa-marker"></i>
										</a>
										<a href="acciones/borrar.contacto.php?ID_CONTACTO=<?php echo $row['ID_CONTACTO']?>" class="btn btn-danger">
										<i class="far fa-trash-alt"></i>
										</a>
										</td>
									</tr>
									<?php } ?>
                                    </tbody>
                                </table>
                                <br> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header bg-info">
                 <h3 class="text-white">Publicidad</h3>
            </div>
            <div class="card-body">
                <form action="acciones/guardar.publicidad.php" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-success" name="guardarpu">Guardar</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nombrepu">Nombre de la Publicidad:</label>
                            <input type="text" name="nombrepu"  class="form-control" autofocus>
                        </div>
                        <div class="col-md-6">
                            <label for="tipopu">Tipo:</label>
                            <input type="text" name="tipopu"  class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="descripcion">Descripcion:</label>
                            <input type="text" name="descripcion"  class="form-control">
                        </div>
                    </div>
                </form>                        
            </div>
            <div class="card-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table id="tablaPublicidad" class="table table-striped table-bordered table-condensed" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre de la publicidad</th>
                                            <th>Tipo</th>
                                            <th>Descripcion</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM publicidad";
                                            $result_publicidad = mysqli_query($conn, $query);    

                                            while($row = mysqli_fetch_assoc($result_publicidad)) { ?>
                                                <tr>
                                                    <td><?php echo $row['ID_PUBLICIDAD']; ?></td>
                                                    <td><?php echo $row['NOMBRE_PU']; ?></td>
                                                    <td><?php echo $row['TIPO']; ?></td>
                                                    <td><?php echo $row['DESCRIPCION']; ?></td>
                                                    <td>
                                                        <a href="editar.publicidad.php?ID_PUBLICIDAD=<?php echo $row['ID_PUBLICIDAD']?>" class="btn btn-primary">
                                                            <i class="fas fa-marker"></i>
                                                        </a>
                                                        <a href="acciones/borrar.publicidad.php?ID_PUBLICIDAD=<?php echo $row['ID_PUBLICIDAD']?>" class="btn btn-danger">
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

<?php require_once "views/parte_inferior.php"?>
