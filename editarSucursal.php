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
      $ciudad = $_POST['ciudad'];
      $direccion = $_POST['direccion'];
      $sql = "update tienda set id = '".$id."',ciudad = '".$ciudad."',direccion = '".$direccion."'";
      $resultado = mysqli_query($conexion,$sql);
      if($resultado){
        echo "<script> alert('LOS DATOS SE ACTUALIZARON CORRECTAMENTE'); location.assign('sucursal.php')</script>";
      }
      else{
        echo "<script> alert('LOS DATOS NO FUERON ACTUALIZADOS CORRECTAMENTE, POR FAVOR REVISE QUE SUCEDIÓ');location.assign('sucursal.php')</script>"; 
      }
      mysqli_close($conexion);
    }
    
    else{
      $id = $_GET['id'];
      $sql = "select * from tienda where id = '".$id."'";
      $resultado = mysqli_query($conexion,$sql);
      $fila = mysqli_fetch_assoc($resultado);
      $id = $fila['id'];
      $ciudad = $fila['ciudad'];
      $direccion = $fila['direccion'];
      mysqli_close($conexion);
    }
    ?>
    <h1>Editar Tienda</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
      <label>Ciudad:</label>
      <input type="text" name='ciudad' value="<?php echo $ciudad;?>"> <br>

      <label>Direccion:</label>
      <input type="text" name='direccion' value="<?php echo $direccion;?>"> <br>

      <input type="hidden" name="id" value= "<?php echo $id;?>">
      <input type="submit" name="enviar" value="ACTUALIZAR">
      <a href="sucursal.php">Regresar</a>
      
    </form>
    <?php
    ?>
  </body>
</html>