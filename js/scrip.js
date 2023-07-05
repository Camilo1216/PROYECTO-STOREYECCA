document.getElementById("btn__registrarse").addEventListener("click",registrar)
document.getElementById("btn__iniciar-sesion").addEventListener("click",IniciarSesion)
window.addEventListener("resize", anchopagina);

//declaracion de variables
var contenedor_login_registrar = document.querySelector(".contenedor__login-registrar")
var formulario_login = document.querySelector(".formulario__login");
var formulario_registro = document.querySelector(".formulario__registro");
var caja_trasera_login = document.querySelector(".caja__trasera_login");
var caja_trasera_registrar = document.querySelector(".caja__trasera-registrar");

caja_trasera_login.style.opacity = "0";

function anchopagina(){
    if(window.innerWidth >850){
        caja_trasera_login.style.display = "block";
        caja_trasera_registrar.style.display = "block";
    }else{
        caja_trasera_registrar.style.display = "block";
        caja_trasera_registrar.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_registro.style.display = "none";
        contenedor_login_registrar.style.left ="0px";
    }
}

anchopagina();

function IniciarSesion(){
    if(window.innerWidth > 850){
        formulario_registro.style.display = "none";
        contenedor_login_registrar.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_registrar.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }else{
        formulario_registro.style.display = "none";
        contenedor_login_registrar.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_registrar.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

function registrar(){
    if(window.innerWidth > 850){
        formulario_registro.style.display = "block";
        contenedor_login_registrar.style.left = "485px";
        formulario_login.style.display = "none";
        caja_trasera_registrar.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }else{
        formulario_registro.style.display = "block";
        contenedor_login_registrar.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_registrar.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}