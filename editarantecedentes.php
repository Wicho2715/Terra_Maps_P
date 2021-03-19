<?php

include("db/conexion.php");


$proyec = ' ';
$motivo = ' ';
$exp_sector = ' ';
$exptecno = ' ';
$edificios = ' ';
$conocimiento = ' ';
$encargado = ' ';
$anos = ' ';
$so = ' ';
$procesador = ' ';
$ram = ' ';
$alma = ' ';
$tipo = ' ';
$rpropios = ' ';
$rejenos = ' ';
$estado1 = ' ';

if  (isset($_GET['ID_ANTECEDENTE'])) {
  $id = $_GET['ID_ANTECEDENTE'];
  $query = "SELECT * FROM antecedentes WHERE ID_ANTECEDENTE = $id";
  $resultado = mysqli_query($conn, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $proyec = $row['ID_PROYECTO'];
    $motivo = $row['MOTIVO_CONTACTO'];
    $exp_sector = $row['EXPE_EMP'];
    $exptecno = $row['EXPE_TECNO'];
    $edificios = $row['INSTA_EDI'];
    $conocimiento = $row['PER_TEMA'];
    $encargado = $row['EXP_ENCA'];
    $anos = $row['ANO_EXP'];
    $so = $row['SISTEMA_OPERATIVO'];
    $procesador = $row['PROCESADOR'];
    $ram = $row['RAM'];
    $alma = $row['ALMACEN'];
    $tipo = $row['TI_INTERNET'];
    $rpropios = $row['RE_PROPIOS'];
    $rejenos = $row['RE_AJENOS'];
    $estado1 = $row['ESTADO_ANTECEDENTES'];
  }
}

if (isset($_POST['modificarantecedentes'])) {
  $id = $_GET['ID_ANTECEDENTE'];
  $proyec = $_POST["proyec"];
  $motivo = $_POST["motivo"];
  $exp_sector = $_POST["exp_sector"];
  $exptecno = $_POST["exptecno"];
  $edificios = $_POST["edificios"];
  $conocimiento = $_POST["conocimiento"];
  $encargado = $_POST["encargado"];
  $anos = $_POST["anos"];
  $so = $_POST["so"];
  $procesador = $_POST["procesador"];
  $ram = $_POST["ram"];
  $alma = $_POST["alma"];
  $tipo = $_POST["tipo"];
  $rpropios = $_POST["rpropios"];
  $rejenos = $_POST["rejenos"];
  

  $query = "UPDATE antecedentes set  MOTIVO_CONTACTO = '$motivo', EXPE_EMP = '$exp_sector', EXPE_TECNO = '$exptecno', INSTA_EDI = '$edificios', PER_TEMA = '$conocimiento', EXP_ENCA = '$encargado', ANO_EXP = '$anos', SISTEMA_OPERATIVO = '$so',
   PROCESADOR = '$procesador', RAM = '$ram', ALMACEN = '$alma', TI_INTERNET = '$tipo', RE_PROPIOS = '$rpropios', RE_AJENOS = '$rejenos' WHERE ID_ANTECEDENTE = $id";
  mysqli_query($conn, $query);
  header('Location: registroante.php');
}
?>
<?php require_once "views/parte_superior.php"?>

<!-- INICIO FORMULARIO HTML -->

<div class="container-fluid">
    <div id="mycontainer" class="container">
<header id="header"> Etapa 2 Antecedentes</header>
    <div clas="abs-center">
    <form action="editarantecedentes.php?ID_ANTECEDENTE=<?php echo $_GET['ID_ANTECEDENTE']; ?>" method="POST" class="needs-validation" novalidate >
<div class="titulo"> --  Proyecto --</div>
<div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarNombre">Motivo por el que contacto a Terra Maps<span class="red">*</span></label>
            <input type="text" class="form-control" id="Motivo" name="proyec" required value="<?php echo $proyec; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>
    <div class="titulo"> --  Motivaci&oacute;n/Experiencia --</div>
    <br>
    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarNombre">Motivo por el que contacto a Terra Maps<span class="red">*</span></label>
            <input type="text" class="form-control" id="Motivo" name="motivo" required value="<?php echo $motivo; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarexp">Experiencia que tiene la empresa con el sector<span class="red">*</span></label>
            <input type="text" class="form-control" name="exp_sector"  required value="<?php echo $exp_sector; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>

   

    <div class="form-row">
        <div class="col-md-12 ">
            <label for="validartecno">Experiencia que tiene con los sistemas tecnol&oacute;gicos *</label>
            <input type="text" class="form-control" name="exptecno" required value="<?php echo $exptecno; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>


    <div class="titulo"> --  Recursos Materiales --</div>
        <div class="col-md-12 mb-12">
            <label for="valiedificios">¿Cuenta con instalaciones o edificios?<span class="red">*</span></label>
            <input type="text" class="form-control" name="edificios" required value="<?php echo $edificios; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>

    <div class="titulo"> --  Recursos Humanos --</div>
    <div class="form-row">
        <div class="col-md-12 ">
            <label for="conocimiento">El personal a cargo cuenta con alguna  capacitaci&oacute;n</label>
            <input type="text" class="form-control" name="conocimiento" required value="<?php echo $conocimiento; ?>">
            <div class="valid-feedback">¡OK valido!</div>
            <div class="invalid-feedback">Completar el campo.</div>
        </div>
    </div>
  
    <div class="form-row">
        <div class="col-md-5 mb-5">
        <label for="valiencargado">El encargado cuenta con experiencia sobre el tema*</label>
        <input type="text" class="form-control" name="encargado" required value="<?php echo $encargado; ?>">
        </div>

        <div class="col-md-7 mb-7">
            <label for="valiperanos">Cuanto tiempo lleva de experiencia (establecer en años)</label>
            <input type="text" class="form-control"  name="anos" value="<?php echo $anos; ?>">
        </div>
    </div>

    <div class="titulo"> --  Recursos tecnol&oacute;gicos --</div>
    <div class="form-row">
    <div class="col-md-3 mb-3">
            <label for="validarprocesador">Tipo de sistema operativo<span class="red">*</span></label>
            <input type="text" class="form-control" name="so" required value="<?php echo $so; ?>">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validarprocesador">Ingrese el tipo de procesador<span class="red">*</span></label>
            <input type="text" class="form-control" name="procesador" required value="<?php echo $procesador; ?>">
        </div>
        <div class="col-md-3 mb-3">
            <label for="valiram">Cantidad de memoria RAM<span class="red">*</span></label>
            <input type="text" class="form-control" name="ram" required value="<?php echo $ram; ?>">
        </div>
        <div class="col-md-3 mb-3">
            <label for="valiralmacenamiento">Capacidad de almacenimiento<span class="red">*</span></label>
            <input type="text" class="form-control" name="alma"  required value="<?php echo $alma; ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="valirinternet">Tipo de internet con el que cuenta<span class="red">*</span></label>
            <input type="text" class="form-control" name="tipo"  required value="<?php echo $tipo; ?>">
        </div>
    </div>

    <div class="titulo"> --  Recursos econ&oacute;micos --</div>
        <div class="col-md-12 mb-12">
            <label for="validarpropios"> PROPIOS<span class="red">*</span></label>
            <input type="text" class="form-control" name="rpropios"  required value="<?php echo $rpropios; ?>">
        
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="validarajenos">AJENOS<span class="red">*</span></label>
            <input type="text" class="form-control" name="rejenos"  required value="<?php echo $rejenos; ?>">
        </div>
    </div>
<br>
 
    <div class="row">
        	<div class="col-lg-12">
            	<button class="btn btn-primary" name="modificarantecedentes">Actualizar</button>
              <a  href="registroante.php" class="btn btn-danger">Cancelar</a>
        	</div>
    	</div>
        <br>

</form>

</div>
</div>



<?php require_once "views/parte_inferior.php"?>