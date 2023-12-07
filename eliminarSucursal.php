<?php 
    include("conexion_be.php");
        $id = $_GET['id'];
        $sql = "delete from vendedor where id_tienda = '".$id."'";
        $resultado = mysqli_query($conexion,$sql);

        $sql1 = "delete from stock where id_tienda = '".$id."'";
        $resultado1   = mysqli_query($conexion,$sql1);

        $sql3 = "delete from encargado where id_tienda = '".$id."'";
        $resultado3 =  mysqli_query($conexion,$sql3);

        $sql2 = "delete from tienda where id = '".$id."'";
        $resultado2 = mysqli_query($conexion,$sql2);
            if($resultado2 && $resultado && $resultado1 && $resultado3){
                echo "<script>alert('LOS DATOS SE ELIMINARON CORRECTAMENTE');location.assign('sucursal.php');</script>";
            }
            else{
            echo "<script> alert('LOS DATOS NO FUERON ACTUALIZADOS CORRECTAMENTE, POR FAVOR REVISE QUE SUCEDIÓ');location.assign('sucursal.php');</script>"; 
            }

    mysqli_close($conexion);
?>