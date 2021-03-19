<?php require_once "views/parte_superior.php"?>

<?php
    include 'db/conexion.php';
    
    
  //  $query=mysqli_query($conn,"SELECT ID_CLIENTE, NOMBRE FROM clientes");
?>
<!--Inicio-->

<div class="card-footer">
                <div class="container">
                <div class="card-header bg-primary">
                <h3 class="text-white">Informaci&oacute;n Financiamiento</h3>
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
                                            <th>Inversion Inicial</th>
                                            <th>Financiamiento</th>
                                            <th>Tipo de financiamiento</th>
                                            <th>Cuenta con credito</th>
                                            <th>Opciones de credito</th>
                                            <th>Accion</th>
                                            
                                        </tr>
                                    </thead>
                                    
									<?php
									$sql="SELECT financiamiento.ID_FINANCIAMIENTO,proyecto_inicial.NOMBRE_PROYECTO,financiamiento.INVER_INICIAL,financiamiento.NOMBRE_FINANCIAMIENTO,financiamiento.TIPO,financiamiento.SOLVENCIA,financiamiento.CREDITO 
                                    FROM financiamiento INNER JOIN proyecto_inicial ON financiamiento.ID_PROYECTO=proyecto_inicial.ID_PROYECTO";
                                    $result=mysqli_query($conn,$sql);
                            
                                    while($mostrar=mysqli_fetch_array($result)){

									echo "<tr>";
                                        echo "<td>"; echo $mostrar['ID_FINANCIAMIENTO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['NOMBRE_PROYECTO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['INVER_INICIAL']; echo "</td>";
                                        echo "<td>"; echo $mostrar['NOMBRE_FINANCIAMIENTO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['TIPO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['SOLVENCIA']; echo "</td>";
                                        echo "<td>"; echo $mostrar['CREDITO']; echo "</td>";
									echo "<td> <a href='editarfina.php?ID_FINANCIAMIENTO=".$mostrar['ID_FINANCIAMIENTO']."'> <button type='button' class='btn btn-primary'>Modificar</button> </a> </td>";
                                    
                                    

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
