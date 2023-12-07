<?php 
include 'conexion_be.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$clasificacion = $_POST['clasificacion'];
$img_link = $_POST['img_link'];
$id_desarrollador = $_POST['id_desarrollador'];
$id_categoria = $_POST['id_categoria'];
$id_plataforma = $_POST['id_plataforma'];
$query = "INSERT INTO juego(id, nombre, precio, clasificacion, img_link , id_desarrollador, id_categoria, id_plataforma) 
          VALUES('$id', '$nombre', '$precio', '$clasificacion','$img_link','$id_desarrollador', '$id_categoria', '$id_plataforma')";
// VERIFICAR QUE EL JUEGO NO SE REPITA EN LA BASE DE DATOS
$verificarNombre = mysqli_query($conexion, "SELECT * FROM juego WHERE nombre = '$nombre'");

if (mysqli_num_rows($verificarNombre) > 0) {
    echo '<script> 
    alert("ESTE JUEGO YA ESTÁ REGISTRADO");
    window.location = "../NIKOTIENDA-main/bienvenido.php";
    </script>';
    exit();
}
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script> 
    alert("JUEGO ALMACENADO EXITOSAMENTE");
    window.location = "../NIKOTIENDA-main/bienvenido.php";
    </script>';
} else {
    echo '<script> 
    alert("INTÉNTALO DE NUEVO, JUEGO NO ALMACENADO");
    window.location = "../NIKOTIENDA-main/bienvenido.php";
    </script>';
}
mysqli_close($conexion);
?>