<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos Manager</title>
    <style>
        a{
            text-decoration: none;
            cursor: pointer;
            background-color: #45a049;
            padding: 8px;
            color: white;
            border-radius: 3px;
        }
        a:hover{
            background-color: #4caf29;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

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
</head>
<body>
    <header>
        <h1>Videojuegos Manager</h1>
    </header>

    <main>
        <form action="Agregarjuego.php" method="POST">
            <h2>Agregar Nuevo Juego</h2>
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>

            <label for="nombre">Nombre del Juego:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" required>

            <label for="clasificacion">Clasificación:</label>
            <input type="text" id="clasificacion" name="clasificacion" required>

            <label for="img_link">img_link:</label>
            <input type="text" id="img_link" name="img_link" required>

            <label for="id_desarrollador">Id Desarrollador:</label>
            <input type="text" id="id_desarrollador" name="id_desarrollador" required>

            <label for="id_categoria">Id Categoria:</label>
            <input type="text" id="id_categoria" name="id_categoria" required>

            <label for="id_plataforma">Id Plataforma:</label>
            <input type="text" id="id_plataforma" name="id_plataforma" required>

            <button type="submit">Agregar Juego</button>
        </form>

    <?php
    include("conexion_be.php");
    $sql = "select * from juego";
    $resultado = mysqli_query($conexion,$sql);
    ?>
    <H1>LISTA DE JUEGOS</H1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Clasificacion</th>
                <th>Id Desarrollador</th>
                <th>ID Cateogoria</th>
                <th>Id plataforma</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($filas = mysqli_fetch_assoc($resultado)){
                ?>
            <tr>
                <td><?php echo $filas['id']?></td>
                <td><?php echo $filas['nombre']?></td>
                <td><?php echo $filas['precio']?></td>
                <td><?php echo $filas['clasificacion']?></td>
                <td><?php echo $filas['id_desarrollador']?></td>
                <td><?php echo $filas['id_categoria']?></td>
                <td><?php echo $filas['id_plataforma']?></td>
                <td>
                    <?php echo "<a href='editar.php?id=".$filas['id']."'>EDITAR</a>";?>
                    <?php echo "<a href='eliminar.php'>ELIMINAR</a>";?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </main>
</body>
</html>
