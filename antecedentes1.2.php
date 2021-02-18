<?php require_once "views/parte_superior.php"?>
<!--Inicio-->

<div class="container">
<header id="header"> Etapa 1 Antecedentes</header>
    <div clas="abs-center">
    
<form method="POST" action="" class="needs-validation" novalidate>
    <div class="form-row mt-5">
    <div class="titulo"> --  Recursos Materiales --</div>
    <br>
        <div class="col-md-12 mb-12">
            <label for="valiedificios">¿Cuenta con instalaciones o edificios?<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="res" value="s" > Si
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="res" value="n"> No
                        </label>
            </fieldset>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarequipos">¿Cuenta con la maquinaria y equipos adecuados?<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="equipos" value="si" > Si, cuenta con equipos
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="equipos" value="no"> No, cuenta con equipo
                        </label>
                        <br>
            </fieldset>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="valimateria">Cuenta con la materia prima de su empresa<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="equipos" value="Si" > Si
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="equipos" value="No"> No
                        </label>
                        <br>
             </fieldset>
        </div>
    </div>
    <div class="titulo"> --  Recursos Humanos --</div>
    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="valipersonal">El personal a cargo cuenta con conocmiento del tema o alguna  capacitaci&oacute;n*</label>
            <input type="text" class="form-control" id="validarsistemas" name="validarsistemastecno" >
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-12">
        <label for="valiencargado">El encargado cuenta con experiencia sobre el tema*</label>
        <fieldset>
                        <label>
                            <input type="radio" name="encargado" value="Si" > Si
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="encargado" value="No"> No
                        </label>
                        <br>
        </fieldset>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="valiencargado">De ser necesario la empresa junto con el encargado se adaptarian a cambios ?*</label>
            <fieldset>
                            <label>
                                <input type="radio" name="cambios" value="Si" > Si
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="cambios" value="No"> No
                            </label>
                            <br>
            </fieldset>
</div>


<div class="form-group mb-10">
        <button class="btn btn-success" type="reset" name="reset">Limpiar</button>
        <a  href="antecedentes1.3.php" class="btn btn-primary">Siguiente</a>
    </div>

</form>

</div>
</div>

<?php require_once "views/parte_inferior.php"?>