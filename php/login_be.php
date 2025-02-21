<?php

    session_start();

    include 'conexion_be.php';

    $email_user = $_POST['email_user'];
    $password_user = $_POST['password_user'];
    $password_user = hash('sha512', $password_user);

    $validar_login = mysqli_query($conexion, "SELECT * FROM registro WHERE email_user='$email_user'
    AND password_user='$password_user'"); 

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $email_user;
        header("location: ../welcome.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos ingresados");
                window.location = "../index.php";
            </script>
        ';
    }exit;
?>