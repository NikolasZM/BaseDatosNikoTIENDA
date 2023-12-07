<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucursales Manager</title>

    <script type= "text/javascript">
        function confirmar(){
            return confirm('¿Estás segudo?, se eliminaran todos los datos');
        }
    </script>
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

        .menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333; /* Cambia el color de fondo según tu preferencia */
    padding: 10px;
  }
    </style>
</head>
<body>
    <header>
        <h1>Manager Sucursales</h1>
        <div class="menu">
        <?php echo "<a href='bienvenido.php?id="."'>Videojuegos</a>";?>
        <div><a href="sucursales.php">Sucursales</a></div> 
            </div>


    </header>

    <main>
        <form action="Agregarsucursal.php" method="POST">
            <h2>Agregar Nueva Sucursal</h2>
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>

            <label for="ciudad">Ciudad de la sucursal:</label>
            <input type="text" id="ciudad" name="ciudad" required>

            <label for="direccion">Direccion:</label>
            <input type="text" id="direccion" name="direccion" required>

            <button type="submit">Agregar Sucursal</button>
        </form>

    <?php
    include("conexion_be.php");
    $sql = "select * from tienda";
    $resultado = mysqli_query($conexion,$sql);
    ?>
    <H1>LISTA DE SUCURSALES</H1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ciudad</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($filas = mysqli_fetch_assoc($resultado)){
                ?>
            <tr>
                <td><?php echo $filas['id']?></td>
                <td><?php echo $filas['ciudad']?></td>
                <td><?php echo $filas['direccion']?></td>
                <td>
                    <?php echo "<a href='editarSucursal.php?id=".$filas['id']."'>EDITAR</a>";?>
                    <?php echo "<a href='eliminarSucursal.php?id=".$filas['id']."' onclick='return confirmar()'>ELIMINAR</a>";?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <?php
    $sql1 = "select * from stock";
    $resultado1 = mysqli_query($conexion,$sql1);
    ?>
    <H1>STOCK DE LAS SUCURSALES</H1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cantidad</th>
                <th>ID Tienda</th>
                <th>ID Juego</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while($filas = mysqli_fetch_assoc($resultado1)){
                ?>
            <tr>
                <td><?php echo $filas['id']?></td>
                <td><?php echo $filas['cantidad']?></td>
                <td><?php echo $filas['id_tienda']?></td>
                <td><?php echo $filas['id_juego']?></td>

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <?php
    $sql2 = "SELECT v.id_trabajador AS id, t.nombre AS nombre, t.salario AS salario, 
            t.telefono AS telefono, v.historial_ventas, v.id_tienda 
            FROM vendedor v 
            JOIN trabajador t ON v.id_trabajador = t.id;";
    $resultado2 = mysqli_query($conexion,$sql2);
    ?>
    <H1>VENDEDORES DE LAS SUCURSALES</H1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Salario</th>
                <th>Telefono</th>
                <th>Historial de ventas</th>
                <th>ID Tienda</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while($filas = mysqli_fetch_assoc($resultado2)){
                ?>
            <tr>
                <td><?php echo $filas['id']?></td>
                <td><?php echo $filas['nombre']?></td>
                <td><?php echo $filas['salario']?></td>
                <td><?php echo $filas['telefono']?></td>
                <td><?php echo $filas['historial_ventas']?></td>
                <td><?php echo $filas['id_tienda']?></td>

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </main>
</body>
</html>