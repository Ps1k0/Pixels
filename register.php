<?php
$username = $_GET['Username'];
$passwordw = $_GET['Passwordw'];
$confpassword = $_GET['Confirm_Password'];
$nombre = $_GET['Name'];
$apellidos = $_GET['Last_Name'];
$edad = $_GET['Age'];
$mail = $_GET['Mail'];


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

    $sql = "INSERT INTO `registro` (`id`, `Username`, `Nombre`, `Apellidos`, `Edad`, `Mail`, `password`, `confpassword`) VALUES (NULL,'" . $username . "','" . $nombre . "','" . $apellidos . "','" . $edad . "','" . $mail . "','" . $passwordw . "','" . $confpassword . "')";

    $consulta = mysqli_query($con, $sql);

    if (!$con) {
        die("No se ha podido realizar en insert correctamente");
    } else {
        echo "el insert se ha realizado correctamente";
    }
}

?>