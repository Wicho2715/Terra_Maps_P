<?php require_once "views/parte_superior.php"?>

<?php
    include 'db/conexion.php';
    
    
  //  $query=mysqli_query($conn,"SELECT ID_CLIENTE, NOMBRE FROM clientes");
?>
<!--Inicio-->

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
                                            <th>Proyecto</th>
                                            <th>Cliente</th>
                                            <th>Proyecto Inicial</th>
                                            <th>Antecedentes</th>
                                            <th>Financiamiento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql="SELECT proyecto_inicial.ID_PROYECTO,proyecto_inicial.NOMBRE_PROYECTO,clientes.NOMBRE FROM proyecto_inicial INNER JOIN clientes 
                                    ON proyecto_inicial.ID_CLIENTE=clientes.ID_CLIENTE";
                                    $result=mysqli_query($conn,$sql);
                            
                                    while($mostrar=mysqli_fetch_array($result)){?>
									<tr>
                                    <td><?php echo $mostrar['ID_PROYECTO'] ?></td>
                                    <td><?php echo $mostrar['NOMBRE_PROYECTO'] ?></td>
                                    <td><?php echo $mostrar['NOMBRE'] ?></td>
									<td>
										<a href="editarproyecto.php?ID_PROYECTO=<?php echo $row['ID_PROYECTO']?>" class="btn btn-primary">
										<i class="fas fa-marker"></i>
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

<!--Fin-->

<?php require_once "views/parte_inferior.php"?>







