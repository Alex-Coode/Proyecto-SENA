<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="css/style-crear-cuenta.css">
</head>

<body>
    <div id="register-container">
        <h1>DECATHLON</h1>
        <form action="php/register_be.php" method="POST">

            <div class="form-row1">
                <h3>Tipo de ID</h3>
                <select name="id_type">
                    <option value="cc">CC</option>
                    <option value="ce">CE</option>
                </select>
            </div>

            <div class="form-row2">
                <h3>Numero de ID</h3>
                <input type="text" name="id_number" required>
            </div>

            <div class="form-row3">
                <h3>Primer Nombre</h3>
                <input type="text" name="first_name" required>
            </div>

            <div class="form-row4">
                <h3>Primer Apellido</h3>
                <input type="text" name="last_name1" required>
            </div>

            <div class="form-row5">
                <h3>Segundo Apellido</h3>
                <input type="text" name="last_name2" required>
            </div>

            <div class="form-row6">
                <h3>Fecha de Nacimiento</h3>
                <input type="date" name="dob" required>
            </div>

            <div class="form-row7">
                <h3>Correo Electrónico</h3>
                <input type="email" name="email_user" required>
            </div>

            <div class="form-row8">
                <h3>Crear Contraseña</h3>
                <input type="password" name="password_user" required>
            </div>

            <button class="btn">Crear Cuenta</button>
        </form>

        <div id="hyperlink1">
            <p><a href="index.php">Volver a inicio sesión</a></p>
        <div>    
    </div>
</body>
</html>
