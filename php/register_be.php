<?php

    include 'conexion_be.php';

    $id_type = $_POST['id_type'];
    $id_number = $_POST['id_number'];
    $first_name = $_POST['first_name'];
    $last_name1 = $_POST['last_name1'];
    $last_name2 = $_POST['last_name2'];
    $dob = $_POST['dob'];
    $email_user = $_POST['email_user'];
    $password_user = $_POST['password_user'];

    //Encriptar contraseña
    $password_user =  hash('sha512', $password_user);

    
    $query = "INSERT INTO registro(id_type, id_number, first_name, last_name1, last_name2, dob, email_user, password_user)
            VALUES('$id_type', '$id_number', '$first_name', '$last_name1', '$last_name2', '$dob', '$email_user', '$password_user')";

    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM registro WHERE email_user = '$email_user' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../crear-cuenta.php";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }

    //verificar que el numero de la identificacion no se repita en la base de datos
    $verificar_tipo_numero = mysqli_query($conexion, "SELECT * FROM registro WHERE id_number = '$id_number' ");

    if(mysqli_num_rows($verificar_tipo_numero) > 0){
        echo '
            <script>
                alert("Esta identificación ya esta registrada, intenta con otra diferente");
                window.location = "../crear-cuenta.php";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Inténtalo de nuevo, usuario no registrado");
                window.location = "../registro_de_usuarios_be.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>
