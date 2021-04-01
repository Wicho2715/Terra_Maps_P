<?php require_once "views/parte_superior.php"?>
<?php include("db/conexion.php");?>
<!--Inicio-->

<div class = "container">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel del Administrador</h1>
    </div>

	<div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                TOTAL DE CLIENTES</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-user-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                TOTAL DE PROSPECTOS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                                        </div>
                                        <div class="col-auto">

                                            <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                TOTAL DE PROYECTOS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-paste fa-2x text-gray-300"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                TOTAL DE USUARIOS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">
																			<?php $mes= date("F");
																		    if($mes=="January"){
																		      $mes='Enero';
																		    }elseif ($mes=="Frebruary") {
																		      $mes='Febrero';
																		    }elseif ($mes=="March") {
																		      $mes='Marzo';
																		    }elseif ($mes=="April") {
																		      $mes='Abril';
																		    }elseif ($mes=="May") {
																		      $mes='Mayo';
																		    }elseif ($mes="June") {
																		      $mes='Junio';
																		    }elseif ($mes="July") {
																		      $mes='Julio';
																		    }elseif ($mes="August") {
																		      $mes='Agosto';
																		    }elseif ($mes="Septiember") {
																		      $mes='Septiembre';
																		    }elseif ($mes="October") {
																		      $mes='Octubre';
																		    }elseif ($mes="November") {
																		      $mes='Noviembre';
																		    }elseif ($mes="December") {
																		      $mes='Diciembre';
																		    } echo 'Clientes y prospectos del mes de '.$mes; ?></h6>

                                </div>

                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
										<canvas id="myChart" width="10" height="5"></canvas>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <?php
                                    $fecha = date("Y/m/d");
                                    echo $fecha;
                                    ?>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-condensed" id="" width="100%" cellspacing="0">
                                <!--class="table table-striped table-bordered table-condensed" style="width: 100%"-->
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Proyecto</th>
                                            <th>Inversion Inicial</th>
                                        </tr>
                                    </thead>
                                    
									<?php
                                     $fecha = date("Y/m/d");
									$sql="SELECT seguimiento.ESTADO_CITA,contacto.NOMBRE_CONTACTO,contacto.ASUNTO FROM seguimiento INNER JOIN contacto ON seguimiento.ID_CONTACTO = contacto.ID_CONTACTO WHERE FECHA = '$fecha'";
                                    $result=mysqli_query($conn,$sql);
                            
                                    while($mostrar=mysqli_fetch_array($result)){

									echo "<tr>";
                                        echo "<td>"; echo $mostrar['ESTADO_CITA']; echo "</td>";
                                        echo "<td>"; echo $mostrar['NOMBRE_CONTACTO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['ASUNTO']; echo "</td>";
                                     

									echo "</tr>";

                                    }
									 ?>
                                    </tbody>
                                </table>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabla de Reportes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-condensed" id="tablaReportes" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Cliente</th>
                                            <th>Cliente</th>
											<th>ID Proyecto</th>
                                            <th>Proyecto</th>
                                            <th>Estado del Proyecto</th>
                                            <th>Estado del Antecedentes</th>
                                            <th>Estado del Financiamiento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									$query = "SELECT T1.ID_CLIENTE, T2.NOMBRE, T1.ID_PROYECTO, T1.NOMBRE_PROYECTO, T1.ESTADO_PROYECTO, T3.ESTADO_ANTECEDENTES, T4.ESTADO_FINANCIAMIENTO FROM proyecto_inicial T1
									INNER JOIN clientes T2 ON T1.ID_CLIENTE = T2.ID_CLIENTE
                                    INNER JOIN antecedentes T3 ON T1.ID_PROYECTO = T3.ID_PROYECTO
                                    INNER JOIN financiamiento T4 ON T1.ID_PROYECTO = T4.ID_PROYECTO";
									$result_consulta = mysqli_query($conn, $query);

									while($row = mysqli_fetch_assoc($result_consulta)) { ?>
									<tr>
										<td><?php echo $row['ID_CLIENTE']; ?></td>
										<td><?php echo $row['NOMBRE']; ?></td>
										<td><?php echo $row['ID_PROYECTO']; ?></td>
										<td><?php echo $row['NOMBRE_PROYECTO']; ?></td>
										<td><?php echo $row['ESTADO_PROYECTO']; ?></td>
                                        <td><?php echo $row['ESTADO_ANTECEDENTES']; ?></td>
                                        <td><?php echo $row['ESTADO_FINANCIAMIENTO']; ?></td>
									</tr>
									<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>

<!--Fin-->

<?php require_once "views/parte_inferior.php"?>
<?php
$fecha= date("Y-m");
$query= mysqli_query($conn, "SELECT ESTADO, FECHA FROM clientes
          WHERE ESTADO LIKE 'Cliente' AND FECHA LIKE '%".$fecha."%'");
        $num_clientes= mysqli_num_rows($query);
$query= mysqli_query($conn, "SELECT ESTADO, FECHA FROM clientes
          WHERE ESTADO LIKE 'Prospecto' AND FECHA LIKE '%".$fecha."%'");
        $num_prospectos= mysqli_num_rows($query);?>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
				labels: ['Clientes', 'Prospectos'],
				datasets: [{
						data: [<?php echo "$num_clientes"; ?>, <?php echo "$num_prospectos"; ?>],
						backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
								'rgba(255, 99, 132, 1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
				}]
		}/*,
		options: {
				scales: {
						yAxes: [{
								ticks: {
										beginAtZero: true
								}
						}]
				}
		}*/
});
</script>
