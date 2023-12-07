<?php 
    include("conexion_be.php");

    $id = $_GET['id'];

    // Eliminar registros de la tabla 'stack'
    $sql_stock = "delete from stock where id_juego = '".$id."'";
    $resultado_stock = mysqli_query($conexion, $sql_stock);

    // Eliminar registros de la tabla 'juego'
    $sql_juego = "delete from juego where id = '".$id."'";
    $resultado_juego = mysqli_query($conexion, $sql_juego);

    if($resultado_stock && $resultado_juego){
        echo "<script>alert('LOS DATOS SE ELIMINARON CORRECTAMENTE');location.assign('bienvenido.php');</script>";
    } else {
        echo "<script>alert('LOS DATOS NO FUERON ACTUALIZADOS CORRECTAMENTE, POR FAVOR REVISE QUE SUCEDIÓ');location.assign('bienvenido.php');</script>"; 
    }

    mysqli_close($conexion);
?>