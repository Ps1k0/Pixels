<?php
$nombre = $_GET['Nombre'];
$apellidos = $_GET['Apellidos'];
$edad = $_GET['Edad'];
$mail = $_GET['Mail'];
$passwordw = $_GET['passwordw'];
$confpassword = $_GET['confpassword'];

echo  "El nombre es " .$nombre ." con apellidos ".$apellidos." edad ".$edad;" mail ".$mail;" y passwordw ".$passwordw;

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

    $sql = "INSERT INTO `registro` (`id`, `Nombre`, `Apellidos`, `Edad`, `Mail`, `password`, `confpassword`) VALUES (NULL,'" . $nombre . "','" . $apellidos . "','". $edad . "','" . $mail . "','" . $passwordw . "','" . $confpassword . "')";

    $consulta = mysqli_query($con, $sql);

    if (!$con) {
        die("No se ha podido realizar en insert correctamente");
    } else {
        echo "el insert se ha realizado correctamente";
    }
}

?>
