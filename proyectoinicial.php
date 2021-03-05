<?php require_once "views/parte_superior.php"?>
<!-- INICIO FORMULARIO HTML -->

<div class="container">
<header id="header"> Etapa 2 Proyecto Inicial</header>
    <div clas="abs-center">
    
<form method="POST" action="guardarproyectoinicial.php" class="needs-validation" >
    <div class="form-row mt-5">
    <div class="titulo"> --  Informaci&oacute;n General  --</div>
    <br>
        <div class="col-md-12 mb-12">
            <label for="validarNombrepro">Nombre del proyecto:<span class="red">*</span></label>
            <input type="text" class="form-control"  name="nomproyec" required>
        </div>
    </div>

    <div class="form-group">
        <label for="valiobpro">Objetivo:<span class="red">*</span></label>
        <textarea class="form-control"  name="objetpro" rows="2" min="25" required></textarea>
    </div>


    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarnomen">Nombre del representante del proyecto<span class="red">*</span></label>
            <input type="text" class="form-control" name="nomre" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarpuen">Puesto que desempe&ntilde;a *</label>
            <input type="text" class="form-control" name="puesto" >
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarTelefono">Teléfono</label>
            <input type="text" class="form-control"  name="telefono" max="999999999">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarMKT">Cuenta con una estrategia de MKT *</label>
            <input type="text" class="form-control" name="planmkt" >
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarplan">Cuenta con un plan estrategico *</label>
            <input type="text" class="form-control" name="plane" >
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarrecursoh">Describir el recurso humano con el que cuenta actualemnte *</label>
            <input type="text" class="form-control"  name="recursoh" >
        </div>
    </div>
 
    <div class="form-group">
        <label for="estado">El estado de la etapa 2 esta:<span class="red">*</span></label>
        <input  class=" btn btn-2" type="text" name="estado2" value="FINALIZDO" readonly>
    </div>
   

    <div class="form-group mb-10">
        <button class="btn btn-success" type="reset" name="reset">Limpiar</button>
        <input type="submit" value="GUARDAR"  class="btn btn-primary"/>
        
    </div>

</form>

</div>
</div>

<!--Fin-->

<?php require_once "views/parte_inferior.php"?>