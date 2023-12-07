<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
            table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }
</style>

<div class="container">
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
            $query = "SELECT * FROM juego";
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
    <a href="./excel.php" >Descargar Excel</a>
</div>


</body>
</html>