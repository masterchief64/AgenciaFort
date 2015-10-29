<?php
include ('../../modelos/autos.php');
$Auto = new Autos();
$autos = $Auto->get_all();
?>
<?php include "../../_shared/head.php"; ?>
<?php include "../../_shared/menu.php"; ?>

<br>
<br>
<br>
<br>
<center><h2>Autos Registrados</h2></center>
<div class="container">
<table class="table table-bordered " cellspacing="10" cellpadding="10">
    <thead>
        <tr>  
            <th>Imagen</th>
            <th>Auto</th>
            <th>Modelo</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Administrar</th>
        </tr>
    </thead>
    <tbody>
<?php while ($row = mysqli_fetch_array($autos)) { ?>
            <tr>
                <td><?php echo $row['imagen'] ?></td>
                <td><?php echo $row['auto'] ?></td>
                <td><?php echo $row['modelo'] ?></td>
                <td><?php echo $row['tipo'] ?></td>
                <td><?php echo $row['precio'] ?></td>     
                <td colspan="3">
                    <a class="btn btn-danger" href="http://localhost/AgenciaFort/modulos/autos/eliminar.php?id=<?php echo $row['id'] ?>">Eliminar</a>
                    <a class="btn btn-success" href="http://localhost/AgenciaFort/modulos/autos/modificar.php?id=<?php echo $row['id'] ?>">Editar</a>
                  
                </td>   
            </tr>
<?php } ?>
    </tbody>
</table>
    
    </div>

<?php include "../../_shared/footer.php"; ?>
