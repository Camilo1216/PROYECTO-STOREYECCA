document.getElementById("boton_cancelar").addEventListener("click",btn_cancelar)
document.getElementById("boton_cancelar1").addEventListener("click",btn_cancelar)
document.getElementById("boton_cancelar3").addEventListener("click",btn_cancelar)
document.getElementById("btn_crear_producto").addEventListener("click",crear_producto)
document.getElementById("btn_crear_categoria").addEventListener("click",crear_categoria)
document.getElementById("btn_lista_productos").addEventListener("click",lista_producto)

var contenedor_crear_categoria = document.querySelector(".formulario_crear_categoria");
var contenedor_crear_producto = document.querySelector(".formulario_crear_producto");
var contenedor_lista_producto = document.querySelector(".lista_productos");

function crear_producto(){
    if(window.innerWidth > 850){
        contenedor_lista_producto.style.display = "none";
        contenedor_crear_categoria.style.display = "none";
        contenedor_crear_producto.style.display = "block";
        contenedor_crear_producto.style.left = "500px"
        
    }else{
        contenedor_crear_categoria.style.display = "none";
        contenedor_crear_producto.style.display = "none";
        
    }
}

function crear_categoria(){
    if(window.innerWidth > 850){
        contenedor_lista_producto.style.display = "none";
        contenedor_crear_producto.style.display = "none";
        contenedor_crear_categoria.style.display = "block";
        contenedor_crear_categoria.style.left = "500px"

        
    }else{
        contenedor_crear_categoria.style.display = "none";
        contenedor_crear_producto.style.display = "none";
    }
}

function lista_producto(){
    if(window.innerWidth > 850){
        contenedor_crear_producto.style.display = "none";
        contenedor_crear_categoria.style.display = "none";
        contenedor_lista_producto.style.display = "block";
        contenedor_lista_producto.style.left = "400px"

    }else{
        contenedor_crear_categoria.style.display = "none";
        contenedor_crear_producto.style.display = "none";
    }
}

function btn_cancelar(){
    if(window.innerWidth > 850){
        contenedor_lista_producto.style.display = "none";
        contenedor_crear_producto.style.display = "none";
        contenedor_crear_categoria.style.display = "none";
    }else{
        contenedor_crear_producto.style.display = "none";
        contenedor_crear_categoria.style.display = "none";
    }
}