<?php require_once "views/parte_superior.php"?>
<!-- INICIO FORMULARIO HTML -->

<div class="container">
<header id="header"> Etapa 1 Antecedentes</header>
    <div clas="abs-center">
    
<form method="POST" action="" class="needs-validation" novalidate>
    <div class="form-row mt-5">
    <div class="titulo"> --  Motivaci&oacute;n/Experiencia --</div>
    <br>
        <div class="col-md-12 mb-12">
            <label for="validarNombre">Motivo por el que contacto a Terra Maps<span class="red">*</span></label>
            <input type="text" class="form-control" id="motivo" name="validarMotivo" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarApellidos">Medio por el cual supo de Terra Maps<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="numero" value="1" > Redes sociales
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="numero" value="2"> Campañas publicitarias
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="numero" value="3"> Amigos/Conocidos
                        </label>
                    </fieldset>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarEmail">Experiencia que tiene la empresa con el sector<span class="red">*</span></label>
            <input type="text" class="form-control" id="valiexpsector" name="validarexp" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarTelefono">Experiencia que tiene con los sistemas tecnol&oacute;gicos *</label>
            <input type="text" class="form-control" id="validarsistemas" name="validarsistemastecno" >
        </div>
    </div>

 

    <div class="form-group">
        <label for="validationMensaje">Comentarios Adicionales<span class="red">*</span></label>
        <textarea class="form-control" id="validationMensaje" name="validationMensaje" rows="3" min="25" required></textarea>
    </div>

    <div class="form-group mb-10">
        <button class="btn btn-success" type="reset" name="reset">Limpiar</button>
        <a  href="antecedentes1.2.php" class="btn btn-primary">Siguiente</a>
    </div>

</form>

</div>
</div>
-->
<!--Fin-->

<?php require_once "views/parte_inferior.php"?>
