<?php require_once "views/parte_superior.php"?>
<?php
    include 'db/conexion.php';
    
    
    $query=mysqli_query($conn,"SELECT ID_CLIENTE, NOMBRE FROM clientes");
?>
<!-- INICIO FORMULARIO HTML -->

<div class="container">
<header id="header"> Etapa 1 Proyecto Inicial</header>
    <div clas="abs-center">
    
<form action="acciones/guardarproyectoinicial.php" method="POST" class="needs-validation" novalidate >
    <div class="form-row mt-5">
    <div class="titulo"> --  Informaci&oacute;n General  --</div>
    <br>
        <div class="col-md-12 mb-12">
            <label for="validarNombrepro">Nombre del proyecto:<span class="red">*</span></label>
            <input type="text" class="form-control"  name="nomproyec" required>
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="valiobpro">Objetivo:<span class="red">*</span></label>
            <textarea class="form-control"  name="objetpro" rows="2" min="25" required></textarea>
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-12">
        <label for="valiobpro">Nombre del cliente:<span class="red">*</span></label>
        <br>
        <select class="form-control" name="cliente" id="" required > 
            <option value="">Cliente</option>
        <?php
            $v = mysqli_query($conn,"SELECT * FROM clientes"); 
            while($clientes = mysqli_fetch_row($v))
            {
        ?>
            <option value="<?php echo $clientes[0] ?>"> <?php echo $clientes[1]?> </option>
        <?php
            }
    
        ?>

    </select>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="puesto">Puesto que desempe&ntilde;a</label>
            <input type="text" name="puesto"  class="form-control" placeholder="" value="" required>
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="telefono">Telefono:</label>
            <input type="number" name="telefono"  class="form-control" placeholder="" value="" required>
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="mkt">Cuenta con una estrategia de MKT</label>
            <input type="text" name="planmkt"  class="form-control" placeholder="" value="" required>
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="estrategico">Cuenta con un plan estrategico</label>
            <input type="text" name="plane"  class="form-control" placeholder="" value="" required>
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-12">
            <label for="estrategico">Describir el recurso humano con el que cuenta actualemnte</label>
            <input type="text" name="recursoh"  class="form-control" placeholder="" value="" required>
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>
    
   

 
    <div class="form-group">
        <label for="estado">El estado de la etapa 1 esta:<span class="red">*</span></label>
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