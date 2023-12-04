<?php 
    $conexion = mysqli_connect("localhost","root","","tiendajuegos1");
    
    if(!$conexion){
        echo 'No se ha podido conectar a la base de datos';
    }
?>