<?php require_once "views/parte_superior.php"?>

<!--Inicio-->
<!--

                    
            <div class="pagina">
                <div class="titulo">Recursos econ&oacute;micos</div>
                    <div clas="campo">
                    <div class="label">Recursos con los que cuenta</div>
                    <select id="tip-inte">
                        <option value="-1" disabled selected>PROPIOS</option>
                        <option value="0">Efectivo</option>
                        <option value="1">Aporte de Socios</option>
                        <option value="1">Beneficios guardados</option>
                    </select>
                    <select id="tip-inte">
                        <option value="-1" disabled selected>AJENOS</option>
                        <option value="0">Pr&eacute;stamos de proveedores</option>
                        <option value="1">Cr&eacute;ditos bancarios o privados</option>
                        <option value="1">Bonos</option>
                    </select>
                </div>
                <div clas="campo btn">
                   <button class="fin">Finalizar </button>
                </div>
        <form>
</div>
-->
<!-- INICIO FORMULARIO HTML -->

<div class="container">
<header id="header"> Etapa 1 Antecedentes</header>
    <div clas="abs-center">
    
<form method="POST" action="" class="needs-validation" novalidate>
    <div class="form-row mt-5">
    <div class="titulo"> --  Recursos econ&oacute;micos --</div>
    <br>
        <div class="col-md-12 mb-12">
            <label for="validarpropios"> PROPIOS<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="rpropios" value="reefec" > Efectivo
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="rpropios" value="reas"> Aporte de socios
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="rpropios" value="rebg"> Beneficios guardados
                        </label>
                    </fieldset>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarajenos">AJENOS<span class="red">*</span></label>
            <fieldset>
                        <label>
                            <input type="radio" name="numero" value="1" > Pr&eacute;stamos de proveedores
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="numero" value="2"> Cr&eacute;ditos bancarios o privados
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="numero" value="3"> Bonos
                        </label>
                    </fieldset>
        </div>
    </div>
 

    <div class="form-group">
        <label for="validationMensaje">Comentarios Adicionales<span class="red">*</span></label>
        <textarea class="form-control" id="validationMensaje" name="validationMensaje" rows="3" min="25" required></textarea>
    </div>

    <div class="form-group mb-10">
        <button class="btn btn-primary" type="submit" name="submit">Guardar</button>
    </div>

</form>

</div>
</div>
-->
<!--Fin-->

<?php require_once "views/parte_inferior.php"?>