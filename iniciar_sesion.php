<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_iniciar_sesion.css">
    <title>INICIAR SESION</title>
</head>
<body>
    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera_login">
                    <h3>¿Ya tienes cuenta?</h3>   
                    <p>inicia sesion para entrar a la pagina</p>
                    <button id="btn__iniciar-sesion" type="submit">INICIAR SESION</button>
                </div>
                <div class="caja__trasera-registrar">
                    <h3>¿Aun no tienes cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">REGISTRARSE</button>
                </div>
            </div>
            <div class="contenedor__login-registrar">
                <form action="php/iniciar_Sesion_be.php" method="post" class="formulario__login">
                    <h2>INICIAR SESION</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo_electronico_usuario">
                    <input type="password" placeholder="Contraseña" name="contrasenia_usuario">
                    <button type="submit">Entrar</button>
                </form>

                <form action="php/registro_usuario_be.php" method="post" class="formulario__registro">
                    <h2>REGISTRARSE</h2>
                    <input type="text" placeholder="Nombre" name="nombre">
                    <input type="text" placeholder="telefono" name="telefono">
                    <input type="text" placeholder="Dirreccion" name="direccion">
                    <input type="text" placeholder="Correo Electronico" name="correo_electronico">
                    <input type="password" placeholder="Contraseña" name="contrasenia">
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div> 
    </main>
    <script src="js/scrip.js"></script>
</body>
</html>