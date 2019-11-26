<?php

$user = 'root';
$pass = '';
$host = 'localhost';
$bdat = 'acro';

$id = $_GET["id"];

$conexion = mysqli_connect($host, $user, $pass) or die("Error xd");
$bd = mysqli_select_db($conexion, $bdat) or die("Error xd");


    $query = "Select * From producto where id_producto = '$id'";

    $res = mysqli_query($conexion, $query);
