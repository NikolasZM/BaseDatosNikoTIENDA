<?php
header("contrnt-type: application/xls");
header("content-disposition: attachment; filename=Juegos.xls");
?>
<table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>CLASIFICACION</th>
            <th>ID-DESARROLLADOR</th>
            <th>ID-CATEGORIA</th>
            <th>ID-PLATAFORMA</th>
        </tr>
        <?php
            include("conexion_be.php");
            include("bienvenido.php");
            $query = "SELECT * FROM juego $where";
            $resultado = mysqli_query($conexion,$query);
            while($row = mysqli_fetch_array($resultado)){

        ?>
        <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
            <td><?php echo $row[5] ?></td>
            <td><?php echo $row[6] ?></td>
            <td><?php echo $row[7] ?></td>
        </tr>
        <?php }?>
</table>

