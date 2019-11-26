<?php if($opn_token = "NtRgedkbibvTWo3cMkerX4hkdRYw7b3c"){
$lib = "libs/css/";
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?= $project_name .' | '. $page_name ?></title>

        <link rel="stylesheet" href="<?= $url_project.$lib ?>principal.css">
        <link rel="stylesheet" href="<?= $url_project.$lib ?>bootstrap-grid.css">
        <link rel="stylesheet" href="<?= $url_project.$lib ?>bootstrap-grid.min.css">
        <link rel="stylesheet" href="<?= $url_project.$lib ?>bootstrap-reboot.css">
        <link rel="stylesheet" href="<?= $url_project.$lib ?>bootstrap-reboot.min.css">
        <link rel="stylesheet" href="<?= $url_project.$lib ?>bootstrap.css">
        <link rel="stylesheet" href="<?= $url_project.$lib ?>bootstrap.min.css">
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-sm bg-warning">
            <a href="<?= $url_project;?>index"><button class="btn btn-success">Inicio</button></a>
            <a href="<?= $url_project;?>agregarProducto"><button class="btn btn-success">Agregar Producto</button></a>
            <a href="<?= $url_project;?>mostrarProductos"><button class="btn btn-success">Mostrar Productos</button></a>
        </nav>
    </header>
<?php }else{
    Header('location: 404');
}?>
