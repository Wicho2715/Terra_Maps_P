<?php require_once "views/parte_superior.php"?>
<!--Inicio-->

<div class="container">
<header id="header"> Etapa 1 Antecedentes</header>
    <div clas="abs-center">
    
<form method="POST" action="" class="needs-validation" novalidate>
    <div class="form-row mt-5">
    <div class="titulo"> --  Recursos tecnol&oacute;gicos --</div>
       
    <div class="col-md-12 mb-12">
  
    <p> *Introduzca las siguientes carcateristicas de la computadora*</p>
            <label for="validarso">Tipo de sistema operativo con el que cuenta actualemente<span class="red">*</span></label>
            <input type="text" class="form-control" id="so" name="valiso" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarprocesador">Ingrese el tipo de procesador<span class="red">*</span></label>
            <input type="text" class="form-control" id="procesador" name="valiprocesador" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="valiram">Cantidad de memoria RAM<span class="red">*</span></label>
            <input type="text" class="form-control" id="RAM" name="valiram" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="valiralmacenamiento">Capacidad de almacenimiento<span class="red">*</span></label>
            <input type="text" class="form-control" id="alma" name="valiralma" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="valirinternet">Tipo de internet con el que cuenta<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="ti" value="fo" > Fibra &oacute;ptica
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="ti" value="sa"> Satelital
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="ti" value="ct"> Cable de tel&eacute;fono (RJ-11)
                        </label>
            </fieldset>
        </div>
    </div>

    <div class="form-group mb-10">
        <button class="btn btn-success" type="reset" name="reset">Limpiar</button>
        <a  href="antecedentes1.4.php" class="btn btn-primary">Siguiente</a>
    </div>

</form>

</div>
</div>

<?php require_once "views/parte_inferior.php"?>