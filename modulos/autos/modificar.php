<?php
include "../../modelos/autos.php";
$Auto = new Autos();


if (isset($_POST['autos'])) { //isset valida si el formulario ha sido enviado
    $datos_auto = $_POST['autos'];
    $Auto->update($datos_auto);
}


$id = $_GET['id'];
$auto = $Auto->get_by_id($id);
$row = mysqli_fetch_array($auto); //recupera la información de un solo registro
//echo $row['no_control'];
?>

<?php include "../../_shared/head.php"; ?>
<?php include "../../_shared/menu.php"; ?>


<br>
<br>
<br>
<br>

<div class="container">
    <div>
        <h1>MODIFICAR A: <?php echo $row['auto'] ?> ? </h1>
    </div>
    <form method="post" action="">
        <div class="form-group center-block" >
            <input type="hidden" value="<?php echo $row['id'] ?>" name="autos[id]" id="alumno_id" class="form-control" >
        </div>
        <div class="form-group center-block" >

            <label> Imagen: </label><br>
            <input type="file" value="<?php echo $row['imagen'] ?>" name="autos[imagen]" id="alumno_no_control" class="form-control" >
        </div>
        <br>
        <div class="form-group">
            <label> Auto: </label><br>
            <input type="text" value="<?php echo $row['auto'] ?>" name="autos[auto]" id="alumno_nombre" placeholder="Nombre del Alumno" class="form-control">
        </div>
        <div class="form-group">
            <label> Modelo: </label><br>
            <input type="text" value="<?php echo $row['modelo'] ?>" name="autos[modelo]" id="alumno_nombre" placeholder="Nombre del Alumno" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label> Tipo: </label><br>
            <input type="text" value="<?php echo $row['tipo'] ?>" name="autos[tipo]" id="alumno_apellidos" placeholder="Apellidos" class="form-control">
        </div>
        <div class="form-group">
            <label> Precio: </label><br>
            <input type="text" value="<?php echo $row['precio'] ?>" name="autos[precio]" id="alumno_apellidos" placeholder="Apellidos" class="form-control">
        </div>
        <br>
        
            <br>  
            <br>
            <button type="submit" class="btn btn-success btn-lg">Modificar</button>
            <a class="btn btn-primary btn-lg" href="http://localhost/AgenciaFort/modulos/autos/autos.php">Cancelar</a>
        </div>
    </form>
</div>
<?php include "../../_shared/footer.php"; ?>