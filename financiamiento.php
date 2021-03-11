<?php require_once "views/parte_superior.php"?>
<!-- INICIO FORMULARIO HTML -->

<div class="container">
<header id="header"> Etapa 3 Financiamiento</header>
    <div clas="abs-center">
    
<form action="acciones/guardarfinanciamiento.php"  method="POST" class="needs-validation" novalidate>
    <div class="form-row mt-5">

    
        <div class="col-md-4 mb-12">
            <label for="validarinver">Cual es su monto de inversión inicial<span class="red">*</span></label>
            <input type="text" class="form-control" name="inversion"  required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarnomf">Nombre del financiamineto<span class="red">*</span></label>
            <input type="text" class="form-control" name="nomf" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validartipof">Tipo de financiemiento *</label>
            <input type="text" class="form-control" name="tipof"  required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarsolvencia">Cuenta con solvencia<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="solvencia" value="si" > SI
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="solvencia" value="no"> NO
                        </label>
                    </fieldset>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validaropcredito">Conoce las opciones de cr&eacute;dito disponobles<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="opcre" value="si" > SI
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="opcre" value="no"> NO
                        </label>
                    </fieldset>
        </div>
    </div>
    <div class="form-group">
        <label for="estado">El estado de la etapa 3 esta:<span class="red">*</span></label>
        <input  class=" btn btn-2" type="text" name="estado3" value="FINALIZDO" readonly>
    </div>

    <div class="form-group mb-10">
        <button class="btn btn-success" type="reset" name="reset">Limpiar</button>
        <button class="btn btn-primary" id="Guardar" type="submit" name="submit">Guardar</button>
    </div>

</form>

</div>
</div>

<!--Fin-->

<?php require_once "views/parte_inferior.php"?>