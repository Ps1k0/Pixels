<?php

$servidor = "localhost";
$usuario = "root";
$password = "usbw";

$bd = "daw2";


$con = mysqli_connect($servidor, $usuario, $password, $bd);


if (!$con) {
    die("No se ha podido realizar la conexion_");
} else {
    mysqli_set_charset($con, "utf8");
    
    echo "Se ha estabecido correctamente la conexion a la base de datos";
}

?>