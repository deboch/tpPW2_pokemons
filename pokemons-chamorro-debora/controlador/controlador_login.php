<?php
require_once './conexion.php';

$email = $_POST["email"];
$pass = $_POST['password'];

$sql = "SELECT * from usuario where nombre ='$email'";
$result = mysqli_query($conn,$sql);

if($row = mysqli_fetch_array($result)) {
    if ($row['password'] == $pass) {
        session_start();

        
        if ($row['rol'] == 1) {
            $_SESSION['administrador'] = $usuario;
            header("Location:inicioSesion.php");
        }
    } else {
        header("Location:inicioSesion.php");
        exit();
    }
}else{
    header("Location:inicioSesion.php");
    exit();
}

?>