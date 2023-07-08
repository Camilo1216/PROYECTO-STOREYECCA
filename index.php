<?php
    include 'php/conexion_be.php';
    $dato_recibido_usuario = $_GET['id'];
    
    $correo = "SELECT correo_electronico FROM usuarios WHERE id='$dato_recibido_usuario'";
    $correo_usuarios = mysqli_query($conexion,$correo);

    $correo_usuarios = mysqli_fetch_assoc($correo_usuarios)['correo_electronico'];
?>
<!DOCTYPE html>
<html>
<head>

    <title>S T O R E Y E C C A</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style__blog.css">


    <button id="btn_iniciar_sesion" onclick="redireccionar()" type="submit">INICIAR SESION</button>
    <div class="contenedor_caja_usuario">
        <p><?php  echo $correo_usuarios;?></p>
    </div>
    <script>
        function redireccionar() {
            window.location.href = "iniciar_sesion.php";
        }
    </script>

</head>
<body>
    <header><!-- se utiliza para poder agrupar link o logo-->
        <h1 id="titulo">S T O R E Y E C C A</h1>
    </header>

    <div class="container"><!--sirve para definir las secciones de nuestra app-->
        <div class="productos"><!--definir contenido independiente-->
            <h2>PANTALONES</h2>
            <P>Unicos en su estilo</P>
            <img src="img/pantalon.jpg">
            <p>descripcion:</p>
        </div>
    </div>
    <footer><!-- pie de pag-->
        <div class="enlaces">
            <a id="link" href="#titulo">ir al comienzo</a>
            <a id="contacto" target="_blank" href="https://instagram.com"><img src="img/instagram.jpg"></a>
        </div>
            <p>yeimer estupinan</p>
    </footer>
    <script src="js/script_index.js"></script>
</body>
</html>
