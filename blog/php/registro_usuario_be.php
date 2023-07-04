<?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo_electronico = $_POST['correo_electronico'];
    $contrasenia = $_POST['contrasenia'];
    // encriptar contraseña
    // $contrasenia_encriptada = password_hash($contrasenia, PASSWORD_DEFAULT);

    $insertar = "INSERT INTO usuarios(nombre, telefono, direccion, correo_electronico, contrasenia) 
              VALUES('$nombre','$telefono','$direccion','$correo_electronico','$contrasenia')";
    
    //VERIFICAR QUE NO SE REPITA LOS USUARIOS EN LA BASE DE DATOS

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico ='$correo_electronico' OR nombre ='$nombre'"); 
    
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intentalo nuevamente");
                window.location = "../iniciar_sesion.php"; 
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $insertar);
    
    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado con exito");
                window.location = "../../practica/blog.html";
            </script>
        ';
    }else{
        echo '
            <script>
            alert("Error intentalo de nuevo");
            window.location = "../iniciar_sesion.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>