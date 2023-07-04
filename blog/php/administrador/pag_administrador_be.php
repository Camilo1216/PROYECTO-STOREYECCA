<?php

    include '../conexion_be.php';

    $nombre = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion_producto'];
    $cantidad = $_POST['cantidad_producto'];
    $valor = $_POST['valor_producto'];
    $imagen = $_POST['imagen_producto'];

    $insertar_producto = "INSERT INTO crear_productos(nombre_producto, descripcion_producto, cantidad_producto, valor_producto, imagen_producto) 
                          VALUES('$nombre','$descripcion','$cantidad','$valor','$imagen')";
    
    $ejecutar = mysqli_query($conexion, $insertar_producto);

    if($ejecutar){
        echo '
        <script>
            alert("producto creado con exito");
            window.location = "pag_administrador.html";
        </script>
        ';
    }else{
        echo '
            <script>
                alert("ERROR: No se ha podido crear el producto");
                window.location = "pag_administrador.html";
            </script>
        ';
    }
    mysqli_close($conexion);

?>