<?php 
include("conexion_be.php");
?>
<html>
  <head>
    <title>EDITAR</title>
  </head>
  <body>
    <?php
    if(isset($_POST['enviar'])){
      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $precio = $_POST['precio'];
      $clasificacion = $_POST['clasificacion'];
      $img_link = $_POST['img_link'];
      $id_desarrollador = $_POST['id_desarrollador'];
      $id_categoria = $_POST['id_categoria'];
      $id_plataforma = $_POST['id_plataforma'];
      $sql = "update juego set id = '".$id."',nombre = '".$nombre."',precio = '".$precio."',clasificacion = '".$clasificacion."',img_link = '".$img_link."',
      id_desarrollador = '".$id_desarrollador."',id_categoria = '".$id_categoria."',id_plataforma = '".$id_plataforma."' where id = '".$id."'";
      $resultado = mysqli_query($conexion,$sql);
      if($resultado){
        echo "<script> alert('LOS DATOS SE ACTUALIZARON CORRECTAMENTE'); location.assign('bienvenido.php')</script>";
      }
      else{
        echo "<script> alert('LOS DATOS NO FUERON ACTUALIZADOS CORRECTAMENTE, POR FAVOR REVISE QUE SUCEDIÓ');location.assign('bienvenido.php')</script>"; 
      }
      mysqli_close($conexion);
    }
    
    else{
      $id = $_GET['id'];
      $sql = "select * from juego where id = '".$id."'";
      $resultado = mysqli_query($conexion,$sql);
      $fila = mysqli_fetch_assoc($resultado);
      $id = $fila['id'];
      $nombre = $fila['nombre'];
      $precio = $fila['precio'];
      $clasificacion = $fila['clasificacion'];
      $img_link = $fila['img_link'];
      $id_desarrollador = $fila['id_desarrollador'];
      $id_categoria = $fila['id_categoria'];
      $id_plataforma = $fila['id_plataforma'];
      mysqli_close($conexion);
    }
    ?>
    <h1>Editar Juego</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
      <label>Nombre:</label>
      <input type="text" name='nombre' value="<?php echo $nombre;?>"> <br>

      <label>Precio:</label>
      <input type="text" name='precio' value="<?php echo $precio;?>"> <br>

      <label>Clasificación:</label>
      <input type="text" name='clasificacion' value="<?php echo $clasificacion;?>"> <br>

      <label>Imagen:</label>
      <input type="text" name='img_link' value="<?php echo $img_link;?>"> <br>

      <label>Id desarrollador:</label>
      <input type="text" name='id_desarrollador' value="<?php echo $id_desarrollador;?>"> <br>
      
      <label>Id categoria:</label>
      <input type="text" name='id_categoria' value="<?php echo $id_categoria;?>"> <br>

      <label>Id plataforma:</label>
      <input type="text" name='id_plataforma' value="<?php echo $id_plataforma;?>"> <br>

      <input type="hidden" name="id" value= "<?php echo $id;?>">
      <input type="submit" name="enviar" value="ACTUALIZAR">
      <a href="bienvenido.php">Regresar</a>
      
    </form>
    <?php
    ?>
  </body>
</html>