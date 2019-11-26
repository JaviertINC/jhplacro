<?php

include "../conexion.php";
include "blocks/config.php";

if(isset($_GET['nombre']) &&
   isset($_GET['marca']) &&
   isset($_GET['modelo']) &&
   isset($_GET['precio']) &&
   iseet($_GET['submit'])){

        $id = $_GET["id"];
        $nombre = $_GET['nombre'];
        $marca  = $_GET['marca'];
        $modelo = $_GET['modelo'];
        $precio = $_GET['precio'];

        $query = "Update producto
                  Set nombre = '$nombre', marca = '$marca', modelo = '$modelo', precio = '$precio'
                  Where id_producto ='$id'";

        $res = mysqli_query($conexion, $query);

        Header("location: http://localhost/impresionesacro/mostrarProductos");
}else{
    echo "vacío";
}
