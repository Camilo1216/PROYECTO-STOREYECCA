<?php

    include 'conexion_be.php';

    $correo_electronico_usuario = $_POST['correo_electronico_usuario'];
    $contrasenia_usuario = $_POST['contrasenia_usuario'];

    $verificar_inicio_sesion = "SELECT correo_electronico, contrasenia FROM usuarios WHERE correo_electronico = '$correo_electronico_usuario' AND contrasenia = '$contrasenia_usuario'";
    $resultado_validacion = mysqli_query($conexion, $verificar_inicio_sesion);

    $verificar_inicio_sesion_administrador = "SELECT correo_electronico_administrador, contrasenia_administrador FROM administrador WHERE correo_electronico_administrador = '$correo_electronico_usuario' AND contrasenia_administrador = '$contrasenia_usuario'";
    $resultado_validacion_administrador = mysqli_query($conexion, $verificar_inicio_sesion_administrador);

    if(mysqli_num_rows($resultado_validacion) > 0){
        echo '
        <script>
            window.location = "../blog.html"
        </script>
        ';
    }elseif(mysqli_num_rows($resultado_validacion_administrador) > 0){
        echo '
        <script>
            window.location = "administrador/pag_administrador.html"
        </script>
        ';
    }else{
        echo '
            <script>
                alert("Error: el usuario no se encuentra registrado");
                window.location = "../iniciar_sesion.php"
            </script>
        ';
        exit();
    }
    mysqli_close($conexion);
?>