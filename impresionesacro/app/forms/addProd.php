<?php

include "../conexion.php";
include "blocks/config.php";

if(isset($_GET['nombre']) &&
   isset($_GET['marca']) &&
   isset($_GET['modelo']) &&
   isset($_GET['precio'])){

        $nombre = $_GET['nombre'];
        $marca  = $_GET['marca'];
        $modelo = $_GET['modelo'];
        $precio = $_GET['precio'];

        $query = "Insert Into
                  producto(nombre, marca, modelo, precio)
                  values('$nombre', '$marca', '$modelo', $precio)";

        $res = mysqli_query($conexion, $query);

        Header("location: http://localhost/impresionesacro/mostrarProductos");
}else{
    echo "vacío";
}
