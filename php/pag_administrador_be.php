<?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion_producto'];
    $cantidad = $_POST['cantidad_producto'];
    $valor = $_POST['valor_producto'];
    $imagen = $_POST['imagen_producto'];
    $dato= $_COOKIE['id'];
    
    $insertar_producto = "INSERT INTO crear_productos(nombre_producto, descripcion_producto, cantidad_producto, valor_producto, imagen_producto) 
                          VALUES('$nombre','$descripcion','$cantidad','$valor','$imagen')";
    
    $ejecutar = mysqli_query($conexion, $insertar_producto);

    $eliminar_producto = mysqli_query($conexion,"DELETE FROM crear_productos WHERE id='38'");

    
    if(isset($_POST['btn_eliminar'])){
        echo '
        <script>
        alert("Producto eliminado con exito");
        window.location = "../administrador/?id='.$dato.'";
        </script>
        ';
    }else{
        echo '
        <script>
        alert("El producto no pudo ser eliminado");
        window.location = "../administrador/?id='.$dato.'";
        </script>
        ';
    }

    if($ejecutar){
        echo '
        <script>
            alert("Producto creado con exito");
            window.location = "../administrador/?id='.$dato.'";
        </script>';
    }else{
        echo '
        <script>
            alert("ERROR: No se ha podido crear el producto");
            window.location = "../administrador/?id='.$dato.'";
        </script>';
        
    }
    mysqli_close($conexion);

?>