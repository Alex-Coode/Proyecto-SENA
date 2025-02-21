<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>    

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio</title>
    <link rel="stylesheet" href="css/style-welcome.css">
</head>

<body>
    <div id="container1">

        <header>
            <h1>DECATHLON</h1>
        </header>

        <nav>
            <ul>
                <li><a href="">Generar Venta</a></li>
                <li><a href="">Generar PDF</a></li>
                <li><a href="">Mi Perfil</a></li>
                <li><a href="">Volver a Inicio</a></li>
                <li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
            </ul>
        </nav>
        
        <section>
        <img src="img/deportes.jpg" alt="Imagen de articulos deportivos">
        </section>

        <footer>
            <p>Desarrollado por Steban Pantoja/Aprendiz Sena</p>
        </footer>
    </div>
</body>
</html>