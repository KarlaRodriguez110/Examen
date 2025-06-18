<?php
$host = "db";
$user = "usuario";
$clave = "password";
$bd = "ventasdb";

$conexion = mysqli_connect($host, $user, $clave, $bd);
if (mysqli_connect_errno()) {
    exit("Error al conectar: " . mysqli_connect_error());
}
mysqli_set_charset($conexion, "utf8");
