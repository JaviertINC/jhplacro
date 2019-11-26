<?php if($opn_token = "NtRgedkbibvTWo3cMkerX4hkdRYw7b3c"){?>
<?php
if(!$_GET['id']){
    Header('Location: 404');
}else{
?>
<?php $page_name = 'Mostrar Producto'; ?>
<?php include "app/forms/getProd.php";
$fila = mysqli_fetch_array($res); ?>
<?php include "blocks/config.php"; ?>
<?php include "blocks/header.php"; ?>
<div class="container">

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td><?= $fila['nombre']; ?></td>
            <td><?= $fila['marca']; ?></td>
            <td><?= $fila['modelo']; ?></td>
            <td><?= $fila['precio']; ?></td>
        </tr>
</tbody>
</table>

</div>
<?php include "blocks/footer.php"; ?>
<?php }}else{
    Header('location: 404');
}?>
