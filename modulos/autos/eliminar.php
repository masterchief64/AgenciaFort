<?php
include "../../modelos/autos.php";
$Auto = new Autos();

$id = $_GET['id'];
$auto = $Auto->get_by_id($id);
$row = mysqli_fetch_array($auto); //recupera la información de un solo registro
//echo $row['no_control'];

$eliminado = false;
if (isset($_POST['autos'])) { //isset valida si el formulario ha sido enviado
    $datos_auto = $_POST['autos'];
    $Auto->delete($datos_auto);
    $eliminado = true;
}
?>

<?php include "../../_shared/head.php"; ?>
<?php include "../../_shared/menu.php"; ?>
<br><br>
 <div class="container">
<?php if ($eliminado): ?>
    <br>
    <h1>Auto: <?php echo $row['auto'] ?> eliminado</h1>
    <a class="btn btn-primary btn-lg" href="http://localhost/AgenciaFort/modulos/autos/autos.php">Volver</a>
<?php else: ?>
     <br>

   
        <div>
            <h1>Eliminar a: <?php echo $row['auto'] ?></h1>
        </div>
        <form method="post" action="">
            <div class="form-group center-block" >

                <input type="hidden" value="<?php echo $row['id'] ?>" name="autos[id]" id="alumno_id" class="form-control" >
            </div>

            <br>
            <button type="submit" class="btn btn-danger btn-lg">Si, eliminar</button>
            <a class="btn btn-primary btn-lg" href="http://localhost/AgenciaFort/modulos/autos/autos.php">Cancelar</a>
            <!--    </div>-->
        </form>
    
<?php endif; ?>
</div>
<?php include "../../_shared/footer.php"; ?>
