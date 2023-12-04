<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: home.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

        <main>

        <div class="contenedor__todo">

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>COLOQUE LA CONTRASEÑA DE SEGURIDAD</h2>
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>
                </div>
            </div>
        </main>
</body>
</html>