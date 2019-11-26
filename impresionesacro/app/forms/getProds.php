<?php

$user = 'root';
$pass = '';
$host = 'localhost';
$bdat = 'acro';

$conexion = mysqli_connect($host, $user, $pass) or die("Error xd");
$bd = mysqli_select_db($conexion, $bdat) or die("Error xd");


    $query = "Select * From producto";

    $res = mysqli_query($conexion, $query);
