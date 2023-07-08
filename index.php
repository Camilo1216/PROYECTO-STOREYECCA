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

    <div class="contenedor_todo">
        <div class="btn_iniciar_registrarse">
            <button id="btn_iniciar_sesion" onclick="redireccionar()" type="submit">INICIAR SESION</button>
        </div>
        <div class="contenedor_caja_usuario">
            <p><?php  echo $correo_usuarios;?></p>
        </div>
        <script>
            function redireccionar() {
              window.location.href = "iniciar_sesion.php";
            }
        </script>
        
    </div>

</head>
<body>
    <header><!-- se utiliza para poder agrupar link o logo-->
        <h1 id="titulo">S T O R E Y E C C A</h1>
    </header>

    <section class="container"><!--sirve para definir las secciones de nuestra app-->
        <article class="post"><!--definir contenido independiente-->
            <h2>PANTALONES</h2>
            <P>Unicos en su estilo</P>
            <img src="img/pantalon.jpg">
            <p>descripcion:</p>
        </article>
        <article class="post"><!--definir contenido independiente-->
            <h2>PANTALONES 2</h2>
            <P>Unicos en su estilo</P>
            <img src="img/pantalon2.jpg">
            <p>descripcion:</p>
        </article>
        <article class="post"><!--definir contenido independiente-->
            <h2>PANTALONES 3</h2>
            <P>Unicos en su estilo</P>
            <img src="img/pantalon3.jpg">
            <p>descripcion:</p>
        </article>
    </section>

    <footer><!-- pie de pag-->
        <section>
            <a id="link" href="#titulo">ir al comienzo</a>
        <a target="_blank" href="https://instagram.com"><img src="img/instagram.jpg" width="30px"></a>
        </section>
        <div>yeimer estupinan</div>
    </footer>
    <script src="js/script_index.js"></script>
</body>
</html>
