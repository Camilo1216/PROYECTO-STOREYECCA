document.getElementById("btn_iniciar_sesion").addEventListener("click",usuario_registrado)


var icono_iniciar = document.querySelector(".btn_iniciar_registrarse button");
var icono_usuario = document.querySelector(".contenedor_caja_usuario");

function usuario_registrado(){
    if(window.innerWidth > 850){
        icono_iniciar.style.display = "none";
        icono_usuario.style.display = "block";
        icono_usuario.style.display = "0";
    }else{
        icono_iniciar.style.display = "none";
        icono_iniciar.style.opacity = "0";
        icono_usuario.style.display = "none";
    }
}