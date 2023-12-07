<?php 
include 'conexion_be.php';

$id = $_POST['id'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$query = "INSERT INTO tienda 
          VALUES('$id', '$ciudad', '$direccion')";
// VERIFICAR QUE EL JUEGO NO SE REPITA EN LA BASE DE DATOS
$verificarNombre = mysqli_query($conexion, "SELECT * FROM juego WHERE nombre = '$nombre'");

if (mysqli_num_rows($verificarNombre) > 0) {
    echo '<script> 
    alert("ESTA SUCURSAL YA ESTÁ REGISTRADA");
    window.location = "../NIKOTIENDA-main/bienvenido.php";
    </script>';
    exit();
}
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script> 
    alert("SUCURSAL ALMACENADA EXITOSAMENTE");
    window.location = "../NIKOTIENDA-main/sucursales.php";
    </script>';
} else {
    echo '<script> 
    alert("INTÉNTALO DE NUEVO, SUCURSAL NO ALMACENADA");
    window.location = "../NIKOTIENDA-main/sucursales.php";
    </script>';
}
mysqli_close($conexion);
?>