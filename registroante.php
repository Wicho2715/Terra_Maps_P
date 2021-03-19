<?php require_once "views/parte_superior.php"?>

<?php
    include 'db/conexion.php';
    
    
  //  $query=mysqli_query($conn,"SELECT ID_CLIENTE, NOMBRE FROM clientes");
?>
<!--Inicio-->

<div class="card-footer">
                <div class="container">
                 <div class="card-header bg-primary">
                    <h3 class="text-white">Informaci&oacute;n Antecedentes</h3>
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
                                            <th>Motivo</th>
                                            <th>Experiencia de empresa</th>
                                            <th>Experiencia en tecnologia</th>
                                            <th>Edificios</th>
                                            <th>Capacitacion</th>
                                            <th>Experiencia</th>
                                            <th>Anos</th>
                                            <th>SO</th>
                                            <th>Procesador</th>
                                            <th>RAM</th>
                                            <th>Capacidad</th>
                                            <th>Internet</th>
                                            <th>R-Propios</th>
                                            <th>R-Ajenos</th>
                                            <th>Accion</th>
                                            
                                        </tr>
                                    </thead>
                                    
									<?php
									$sql="SELECT antecedentes.ID_ANTECEDENTE,proyecto_inicial.NOMBRE_PROYECTO,antecedentes.MOTIVO_CONTACTO,antecedentes.EXPE_EMP, antecedentes.EXPE_TECNO, antecedentes.INSTA_EDI,antecedentes.PER_TEMA,antecedentes.EXP_ENCA,antecedentes.ANO_EXP,antecedentes.SISTEMA_OPERATIVO,antecedentes.PROCESADOR, antecedentes.RAM,antecedentes.ALMACEN,antecedentes.TI_INTERNET,antecedentes.RE_PROPIOS,antecedentes.RE_AJENOS 
                                    FROM antecedentes INNER JOIN proyecto_inicial ON antecedentes.ID_PROYECTO=proyecto_inicial.ID_PROYECTO";
                                    $result=mysqli_query($conn,$sql);
                            
                                    while($mostrar=mysqli_fetch_array($result)){

									echo "<tr>";
                                        echo "<td>"; echo $mostrar['ID_ANTECEDENTE']; echo "</td>";
                                        echo "<td>"; echo $mostrar['NOMBRE_PROYECTO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['MOTIVO_CONTACTO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['EXPE_EMP']; echo "</td>";
                                        echo "<td>"; echo $mostrar['EXPE_TECNO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['INSTA_EDI']; echo "</td>";
                                        echo "<td>"; echo $mostrar['PER_TEMA']; echo "</td>";
                                        echo "<td>"; echo $mostrar['EXP_ENCA']; echo "</td>";
                                        echo "<td>"; echo $mostrar['ANO_EXP']; echo "</td>";
                                        echo "<td>"; echo $mostrar['SISTEMA_OPERATIVO']; echo "</td>";
                                        echo "<td>"; echo $mostrar['PROCESADOR']; echo "</td>";
                                        echo "<td>"; echo $mostrar['RAM']; echo "</td>";
                                        echo "<td>"; echo $mostrar['ALMACEN']; echo "</td>";
                                        echo "<td>"; echo $mostrar['TI_INTERNET']; echo "</td>";
                                        echo "<td>"; echo $mostrar['RE_PROPIOS']; echo "</td>";
                                        echo "<td>"; echo $mostrar['RE_AJENOS']; echo "</td>";
									echo "<td> <a href='editarantecedentes.php?ID_ANTECEDENTE=".$mostrar['ID_ANTECEDENTE']."'> <button type='button' class='btn btn-primary'>Modificar</button> </a> </td>";
                                    
                                    

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
