<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location:welcome.php");
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="css/style.css?v=2">
</head>

<body>
    <div id="login-container">
        <h1>DECATHLON</h1>
        <form action="php/login_be.php" method="POST"> 
            <input class="form" type="email" placeholder="Escriba su Correo" name="email_user" required>
            <input class="form" type="password" placeholder="Escriba su Contraseña" name="password_user" required>
            <input class="form" type="submit" value="Iniciar Sesión">
        </form>

        <a class="link" href="crear-cuenta.php">Crear cuenta</a>
    </div>
</body>
</html>