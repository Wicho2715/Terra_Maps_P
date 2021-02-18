<?php require_once "views/parte_superior.php"?>
<!-- INICIO FORMULARIO HTML -->

<div class="container">
<header id="header"> Etapa 2 Proyecto Inicial</header>
    <div clas="abs-center">
    
<form method="POST" action="" class="needs-validation" novalidate>
    <div class="form-row mt-5">
    <div class="titulo"> --  Informaci&oacute;n General  --</div>
    <br>
        <div class="col-md-12 mb-12">
            <label for="validarNombrepro">Nombre del proyecto:<span class="red">*</span></label>
            <input type="text" class="form-control" id="nomp" name="validarnompro" required>
        </div>
    </div>

    <div class="form-group">
        <label for="valiobpro">Objetivo:<span class="red">*</span></label>
        <textarea class="form-control" id="validationMensaje" name="validarobpro" rows="2" min="25" required></textarea>
    </div>


    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarnomen">Nombre del representante del proyecto<span class="red">*</span></label>
            <input type="text" class="form-control" id="valiencargado" name="valinomen" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarpuen">Puesto que desempe&ntilde;a *</label>
            <input type="text" class="form-control" id="validarpuesto" name="validarpuestoen" >
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarTelefono">Teléfono</label>
            <input type="number" class="form-control" id="validarTelefono" name="validarTelefono" max="999999999">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarMKT">Cuenta con una estrategia de MKT *</label>
            <input type="text" class="form-control" id="validarplanmkt" name="validarmkt" >
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarplan">Cuenta con un plan estrategico *</label>
            <input type="text" class="form-control" id="validarplan" name="validarplane" >
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarrecursoh">Describir el recurso humano con el que cuenta actualemnte *</label>
            <input type="text" class="form-control" id="validarrecursoh" name="validarrecursoh" >
        </div>
    </div>
 

   

    <div class="form-group mb-10">
        <button class="btn btn-success" type="reset" name="reset">Limpiar</button>
        <a  href="*" class="btn btn-primary">Guardar</a>
    </div>

</form>

</div>
</div>

<!--Fin-->

<?php require_once "views/parte_inferior.php"?>