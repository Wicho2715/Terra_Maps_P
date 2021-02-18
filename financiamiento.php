<?php require_once "views/parte_superior.php"?>
<!-- INICIO FORMULARIO HTML -->

<div class="container">
<header id="header"> Etapa 3 Financiamiento</header>
    <div clas="abs-center">
    
<form method="POST" action="" class="needs-validation" novalidate>
    <div class="form-row mt-5">

    
        <div class="col-md-4 mb-12">
            <label for="validarcapital">Capital que esta dispuesto a invertir<span class="red">*</span></label>
            <input type="text" class="form-control" id="capital" name="validarcapital" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarnomf">Nombre del financiamineto<span class="red">*</span></label>
            <input type="text" class="form-control" id="valinomf" name="valinomf" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validartipof">Tipo de financiemiento *</label>
            <input type="text" class="form-control" id="validartipof" name="validartipof" >
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarsolvencia">Cuenta con solvencia<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="solvencia" value="solsi" > SI
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="solvencia" value="solno"> NO
                        </label>
                    </fieldset>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validaropcredito">Conoce las opciones de cr&eacute;dito disponobles<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="opcre1" value="solsi" > SI
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="opcre2" value="solno"> NO
                        </label>
                    </fieldset>
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