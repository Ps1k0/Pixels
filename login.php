<?php

if(!empty($_POST))
{
    if(empty($_POST['Username'])|| empty($_POST['Passwordw']))
    {

    } else {
        require_once "conexion.php";
   
        $user = $_POST['Username'];
        $pass = $_POST['Passwordw'];

        

        $query = mysqli_query($con,"SELECT * FROM registro WHERE Username = '$user' AND confpassword = '$pass'");
        $result = mysqli_num_rows($query);

        

        if($result > 0)
        {
            $data = mysqli_fetch_array($query);

            session_start();

            $_SESION['active'] = true;
            $_SESION['iduser'] = $data['id'];
            $_SESION['name'] = $data['Nombre'];
            $_SESION['username'] = $data['Username'];
            $_SESION['lastaname'] = $data['Apellidos'];
            $_SESION['mail'] = $data['Mail'];

            echo " <br> Bienvenido ".$data['Nombre'];

        }else{
            echo " <br> El usuario o la contraseña son incorrectos";
        }





        }

    }



?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>

<body>

    <form class="box" action="" method="post">
        <h1>Login</h1>
        <input type="text" name="Username" placeholder="Username">
        <input type="password" name="Passwordw" placeholder="Password">
        <input type="submit" name="" value="Login">
    </form>


</body>

</html>