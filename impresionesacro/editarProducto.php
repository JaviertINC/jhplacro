<?php if($opn_token = "NtRgedkbibvTWo3cMkerX4hkdRYw7b3c"){?>
<?php
if(!$_GET['id']){
    Header('Location: 404');
}else{
?>
<?php $page_name = 'Editar Producto'; ?>
<?php include "blocks/config.php"; ?>
<?php include "blocks/header.php"; ?>
<?php include "app/forms/getProd.php";
$fila = mysqli_fetch_array($res); ?>
<div class="container">

    <form method="post" action="app/forms/updProd.php">
        <div class="row">
            <div class="form-group col-12 col-md-6">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                value="<?= $fila['nombre']?>">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca"
                value="<?= $fila['marca']?>">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo"
                value="<?= $fila['modelo']?>">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="precio">Precio:</label>
                <input min="0" type="number" class="form-control" id="precio" name="precio"
                value="<?= $fila['precio']?>">
            </div>
        </div>
        <button type="submit" class="btn btn-success" name="submit">Editar Producto</button>
    </form>

</div>
<?php include "blocks/footer.php"; ?>
<?php }}else{
    Header('location: 404');
}?>
