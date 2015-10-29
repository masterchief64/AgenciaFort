<?php include("../../modelos/autos.php"); ?>
<?php include "../../_shared/head.php"; ?>
<?php include "../../_shared/menu.php"; ?>
<?php
if (isset($_POST['autos'])) { //isset valida si el formulario ha sido enviado
    $datos_auto = $_POST['autos'];

    $Auto = new Autos();
    $Auto->add($datos_auto);
}
?>

<br> t    
<br>
<br>
<center><h2>Registrar Auto</h2></center>
<div class="container">
    <form method="post" action="" enctype="multipart/form-data">
		<div class="form-group center-block">
            <label> Imagen: </label><br>
            <input type="file" name="autos[imagen]" class="form-control">
        </div>
        <div class="form-group center-block">
            <label> Auto: </label><br>
            <input type="text" name="autos[auto]" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label> Modelo: </label><br>
            <input type="text" name="autos[modelo]"  placeholder="Nombre del Alumno" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label> Tipo: </label><br>
            <input type="text" name="autos[tipo]"  placeholder="Apellidos" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label> Precio: </label><br>
            <input type="text" name="autos[precio]"  placeholder="Apellidos" class="form-control">
            
            <br>
            <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
        </div>
    </form>
</div>
<?php include "../../_shared/footer.php"; ?>