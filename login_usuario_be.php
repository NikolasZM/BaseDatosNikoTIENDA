<?php

session_start();

include 'conexion_be.php';

$contrasena = $_POST['contrasena'];
$contrasena_verificar = 12345; // Esto debería ser la contraseña correcta
if($contrasena == $contrasena_verificar){
    header("location: ../NIKOTIENDA-main/bienvenido.php");
    exit();
}else{
    echo '<script> 
    alert("ESTE USUARIO NO EXISTE, POR FAVOR VERIFIQUE LOS DATOS INTRODUCIDOS");
    window.location = "../index.php";
    </script>';
    exit();
}
?>