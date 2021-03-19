<?php require_once "views/parte_superior.php"?>

<?php
    include 'db/conexion.php';
    
    
  //  $query=mysqli_query($conn,"SELECT ID_CLIENTE, NOMBRE FROM clientes");
?>
<!--Inicio-->

<div class="card-footer">
                <div class="container">
                <div class="card-header bg-primary">
                <h3 class="text-white">Informaci&oacute;n Proyecto Inicial</h3>
            </div>
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
                                            <th>Pusto</th>
                                            <th>Tel&eacute;fono</th>
                                            <th>MKT</th>
                                            <th>Plan estrategico</th>
                                            <th>Recursos</th>
                                            <th>Accion</th>
                                            
                                        </tr>
                                    </thead>
                                    
									<?php
									$sql="SELECT proyecto_inicial.ID_PROYECTO,proyecto_inicial.NOMBRE_PROYECTO,proyecto_inicial.OBJETIVO,clientes.NOMBRE,proyecto_inicial.PUESTO,proyecto_inicial.TELEFONO, proyecto_inicial.ESTRATEGIA_MKT,proyecto_inicial.PLAN_ESTRATEGICO,proyecto_inicial.RE_ACTUAL 
                                    FROM proyecto_inicial INNER JOIN clientes ON proyecto_inicial.ID_CLIENTE=clientes.ID_CLIENTE";
                                    $result=mysqli_query($conn,$sql);
                            
                                    while($mostrar=mysqli_fetch_array($result)){

									echo "<tr>";
                                        echo "<td>"; echo $mostrar['ID_PROYECTO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['NOMBRE_PROYECTO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['NOMBRE']; echo "</td>";
                                        echo "<td>"; echo $mostrar['PUESTO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['TELEFONO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['ESTRATEGIA_MKT']; echo "</td>";
                                        echo "<td>"; echo $mostrar['PLAN_ESTRATEGICO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['RE_ACTUAL']; echo "</td>";
									echo "<td> <a href='editarproyecto.php?ID_PROYECTO=".$mostrar['ID_PROYECTO']."'> <button type='button' class='btn btn-primary'>Modificar</button> </a> </td>";
                                    
                                    

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
        </div>
    </div>	

<!--Fin-->

<?php require_once "views/parte_inferior.php"?>
