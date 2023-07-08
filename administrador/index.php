<?php
 include '../php/conexion_be.php';
    $dato_recibido = $_GET['id'];
    
    $correo = "SELECT correo_electronico_administrador FROM administrador WHERE id= '$dato_recibido'";
    $correo_administrador = mysqli_query($conexion,$correo);

    $correo_administrador = mysqli_fetch_assoc($correo_administrador)['correo_electronico_administrador'];
?>
    <!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="../css/style_administrador.css">
    <title>ADMINISTRADOR</title>
    <div class="contenedor_caja_usuario">
        <p><?php  echo $correo_administrador;?></p>
    </div>
</head>
<body>
    <div class="contenedor_todo">

        <div class="boton_categoria">
            <form action="" class="formulario_crear_categoria">
                <input type="text" placeholder="Nombre de la categoria" name="nombre_categoria">
                <button id="boton" type="submit">CREAR</button>
                <button id="boton_cancelar" type="button">CANCELAR</button>
            </form>
            <button id="btn_crear_categoria" type="submit">CREAR CATEGORIA</button>
        </div>
        <div class="boton_producto">
            <form action="../php/pag_administrador_be.php" method="post" class="formulario_crear_producto">
                <input type="text" placeholder="Nombre del producto" name="nombre_producto"><br>
                <input type="text" placeholder="Descripcion" name="descripcion_producto"><br>
                <input type="text" placeholder="Cantidad" name="cantidad_producto"><br>
                <input type="text" placeholder="valor" name="valor_producto"><br>
                <input type="file" name="imagen_producto"><br>
                <button id="boton" type="submit">CREAR</button>
                <button id="boton_cancelar1" type="button">CANCELAR</button>
            </form>
            <button id="btn_crear_producto" type="submit">CREAR PRODUCTO</button>
        </div>
        <div class="boton_lista_productos">
        <button id="btn_lista_productos" type="submit">LISTA DE PRODUCTOS</button>
        </div>
        <div class="lista_productos">
        <table class="tabla_productos">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>CANTIDAD</th>
                        <th>VALOR</th>
                        <th>IMAGEN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  include '../php/conexion_be.php';
                           foreach ($conexion->query("SELECT * FROM crear_productos") as $row) {?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nombre_producto'] ?></td>
                        <td><?php echo $row['descripcion_producto'] ?></td>
                        <td><?php echo $row['cantidad_producto'] ?></td>
                        <td><?php echo $row['valor_producto'] ?></td>
                        <td><?php echo $row['imagen_producto'] ?></td>
                        <td><button id="btn_eliminar" type="submit">ELIMINAR</button></td>
                        <td><button id="btn_editar" type="submit">EDITAR</button></td>
                    </tr>
                </tbody>
                    
                <?php }?>
            </table>
            <button id="boton_cancelar3" type="button">CANCELAR</button>
            </div>
        <div class="boton_pedidos">
            <button type="submit">PEDIDOS</button>
        </div>
        <div class="contenedor_caja_usuario">
        </div>
    </div>
    <script src="../js/scrip__administrador.js"></script>
</body>
</html>
