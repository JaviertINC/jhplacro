<?php if($opn_token = "NtRgedkbibvTWo3cMkerX4hkdRYw7b3c"){?>
<?php $page_name = 'Agregar Producto'; ?>
<?php include "blocks/config.php"; ?>
<?php include "blocks/header.php"; ?>
<div class="container">

    <form action="app/forms/addProd.php">
        <div class="row">
            <div class="form-group col-12 col-md-6">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="precio">Precio:</label>
                <input min="0" type="number" class="form-control" id="precio" name="precio">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Agregar Producto</button>
    </form>

</div>
<?php include "blocks/footer.php"; ?>
<?php }else{
    Header('location: 404');
}?>
