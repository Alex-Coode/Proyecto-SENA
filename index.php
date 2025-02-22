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
    <div id="content">
        <h1>DECATHLON</h1>
        <form class="login" action="php/login_be.php" method="POST"> 
            <input class="userData" type="email" placeholder="Correo electrónico" name="email_user" required>
            <input class="userData" type="password" placeholder="Contraseña" name="password_user" required>
            <input class="userData bottom" type="submit" value="Iniciar Sesión">
        </form>

        <a class="link" href="crear-cuenta.php">Crear cuenta</a>
    </div>
</body>
</html>