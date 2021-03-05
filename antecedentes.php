<?php require_once "views/parte_superior.php"?>

<!-- INICIO FORMULARIO HTML -->
<script type="text/javascript">
    function mostrar(){
        if (document.getElementById("encargado2").checked){
            document.getElementById('caja').className = "form-row fade";
            console.log("primer if");
        }else {
            if(document.getElementById("encargado1").checked){
            document.getElementById('caja').className = "form-row show";
            console.log("segundo if");
            }
        }
    }
    </script>

<div class="container-fluid">
    <div id="mycontainer" class="container">
<header id="header"> Etapa 1 Antecedentes</header>
    <div clas="abs-center">
<form method="post" action="guardarantecedentes.php" class="needs-validation" novalidate>
    <div class="form-row mt-5">
    <div class="titulo"> --  Motivaci&oacute;n/Experiencia --</div>
    <br>
        <div class="col-md-12 mb-12">
            <label for="validarNombre">Motivo por el que contacto a Terra Maps<span class="red">*</span></label>
            <input type="text" class="form-control" id="Motivo" name="motivo" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarexp">Experiencia que tiene la empresa con el sector<span class="red">*</span></label>
            <input type="text" class="form-control" name="exp_sector"  required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validartecno">Experiencia que tiene con los sistemas tecnol&oacute;gicos *</label>
            <input type="text" class="form-control" name="exptecno" >
        </div>
    </div>


    <div class="titulo"> --  Recursos Materiales --</div>
        <div class="col-md-12 mb-12">
            <label for="valiedificios">¿Cuenta con instalaciones o edificios?<span class="red">*</span></label>
            <br>
            <label class="checkbox-inline">
                <input type="checkbox" name="edificios" value="opcion_1"> Si
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="edificios" value="opcion_2"> No
            </label>
        </div>

    <div class="titulo"> --  Recursos Humanos --</div>
    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="valicono">El personal a cargo cuenta con alguna  capacitaci&oacute;n*</label>
            <input type="text" class="form-control"  name="conocimiento" >
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-5 mb-5">
        <label for="valiencargado">El encargado cuenta con experiencia sobre el tema*</label>
                <br>
            <label class="checkbox-inline">
                <input type="checkbox" value="1"  name="encargado" id="encargado1" OnChange="mostrar()"> Si
            </label>
            <label class="checkbox-inline">
                <input type="checkbox"  value="0"  name="encargado" id="encargado2" OnChange="mostrar()"> No
            </label>
        </div>

        <div id="caja" class="form-row fade">
        <div class="col-md-7 mb-7">
            <label for="valiperanos">Cuanto tiempo lleva de experiencia (establecer en años)</label>
            <input type="text" class="form-control"  name="anos" >
        </div>
    </div>
    </div>

    

    <div class="titulo"> --  Recursos tecnol&oacute;gicos --</div>
    <div class="form-row">
    <div class="col-md-3 mb-3">
            <label for="validarprocesador">Tipo de sistema operativo<span class="red">*</span></label>
            <input type="text" class="form-control" name="so" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validarprocesador">Ingrese el tipo de procesador<span class="red">*</span></label>
            <input type="text" class="form-control" name="procesador" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="valiram">Cantidad de memoria RAM<span class="red">*</span></label>
            <input type="text" class="form-control" name="ram" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="valiralmacenamiento">Capacidad de almacenimiento<span class="red">*</span></label>
            <input type="text" class="form-control" name="alma"  required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="valirinternet">Tipo de internet con el que cuenta<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="tipo" value="fo" > Fibra &oacute;ptica
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="tipo" value="sa"> Satelital
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="tipo" value="ct"> Cable de tel&eacute;fono (RJ-11)
                        </label>
            </fieldset>
        </div>
    </div>

    <div class="form-row mt-5">
    <div class="titulo"> --  Recursos econ&oacute;micos --</div>
    <br>
        <div class="col-md-12 mb-12">
            <label for="validarpropios"> PROPIOS<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="rpropios" value="Efectivo" > Efectivo
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="rpropios" value="Aporte de socios"> Aporte de socios
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="rpropios" value="Beneficios propios"> Beneficios guardados
                        </label>
                    </fieldset>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarajenos">AJENOS<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="rejenos" value="Prestamos de proveedores" > Pr&eacute;stamos de proveedores
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="rejenos" value="Creditos bancarios o privados"> Cr&eacute;ditos bancarios o privados
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="rejenos" value="Bonos"> Bonos
                        </label>
                    </fieldset>
        </div>
    </div>
    
    <div class="form-group">
        <label for="estado">El estado de la etapa 1 esta:<span class="red">*</span></label>
        <input  class=" btn btn-2" type="text" name="estado1" id="estado1" value="FINALIZDO" readonly>
    </div>


    
    <div class="form-group mb-10">
        <button class="btn btn-success" type="reset" name="reset">Limpiar</button>
        <button class="btn btn-primary" id="Guardar" type="submit" name="submit">Guardar</button>
    </div>

    
</form>

</div>
</div>
</div>

   
<!--Fin-->

<?php require_once "views/parte_inferior.php"?>
