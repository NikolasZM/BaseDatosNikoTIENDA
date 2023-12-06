<?php 
    include("conexion_be.php");
        $id = $_GET['id'];
        $sql = "delete from juego where id = '".$id."'";
        $resultado = mysqli_query($conexion,$sql);
            if($resultado){
                echo "<script>alert('LOS DATOS SE ELIMINARON CORRECTAMENTE');location.assign('bienvenido.php');</script>";
            }
            else{
            echo "<script> alert('LOS DATOS NO FUERON ACTUALIZADOS CORRECTAMENTE, POR FAVOR REVISE QUE SUCEDIÓ');location.assign('bienvenido.php');</script>"; 
            }

    mysqli_close($conexion);
?>
