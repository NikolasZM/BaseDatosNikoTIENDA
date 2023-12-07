<?php 
$conexion = mysqli_connect("localhost","root","","tiendajuegos1");

if(!$conexion) {
    echo 'error';
}

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];
$carnet_extranjeria = $_POST['carnet_extranjeria'];


$query = "INSERT INTO cliente(nombre, telefono, dni, carnet_extranjeria) 
          VALUES('$nombre', '$telefono', '$dni', '$carnet_extranjeria')";

$ejecutar = mysqli_query($conexion, $query);


if ($ejecutar) {
    echo '<script> 
    alert("JUEGO COMPRADO EXITOSAMENTE");
    window.location = "../NIKOTIENDA-main/main.html";
    </script>';
} else {
    echo '<script> 
    alert("INTÉNTALO DE NUEVO, JUEGO NO COMPRADO");
    window.location = "../NIKOTIENDA-main/main.html";
    </script>';
}
mysqli_close($conexion);
?>