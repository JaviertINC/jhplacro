<?php if($opn_token = "NtRgedkbibvTWo3cMkerX4hkdRYw7b3c"){?>
<?php $page_name = 'Mostrar Productos'; ?>
<?php include "app/forms/getProds.php"; ?>
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
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php while($fila = mysqli_fetch_array($res)){ ?>
    <tr>
            <td><a href="mostrarProducto/<?= $fila['id_producto']?>"><?= $fila['nombre']; ?></a></td>
            <td><?= $fila['marca']; ?></td>
            <td><?= $fila['modelo']; ?></td>
            <td><?= $fila['precio']; ?></td>
            <td>
                <ul class="list-group list-group-horizontal">
                <li class="list-group-item">
                    <a href="mostrarProducto/<?= $fila['id_producto']?>">
                        <button class="btn btn-success">Ver</button>
                    </a>
                </li>
                    <li class="list-group-item">
                        <a href="editarProducto/<?= $fila['id_producto']?>">
                            <button class="btn btn-warning">Editar</button>
                        </a>
                    </li>
                    <li class="list-group-item"><button class="btn btn-danger">Eliminar</button></li>
                </ul>
            </td>
        </tr>
    <?php }; ?>
</tbody>
</table>

</div>
<?php include "blocks/footer.php"; ?>
<?php }else{
    Header('location: 404');
}?>
