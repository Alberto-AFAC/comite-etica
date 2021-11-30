//alert("hola mundo");
//DECLARANDO VARIABLES
document.getElementById("btn__tecnicosesion").addEventListener("click",tecnicoSesion); //liga el botona una accion
//document.getElementById("btn__iniciarsesion").addEventListener("click",iniciarSesion); //liga el botona una accion
document.getElementById("btn__registrar").addEventListener("click",register); //liga el boton a una accion
//window.addEventListener("resize",anchoPagina);
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var formulario__tecnico = document.querySelector(".formulario__tecnico");
var formulario_login = document.querySelector(".formulario__login");
var fomulario_registro = document.querySelector(".formulario__registro");
var caja__trasera_login = document.querySelector(".caja__trase-Login");
var caja__trasera_registro = document.querySelector(".caja__trasera-register");

//anchoPagina ();
function tecnicoSesion(){
    if (window.innerWidth > 850){
        fomulario_registro.style.display = "none";//oculto
        contenedor_login_register.style.left = "250px";//muestra 
        formulario__tecnico.style.display = "block";//muestra
        caja__trasera_registro.style.opacity ="1";//ocultar olvidaste contraseña
        caja__trasera_login.style.opacity = "1";


    }else{
        fomulario_registro.style.display = "none";
        contenedor_login_register.style.left = "0px";
        formulario__tecnico.style.display = "block";
        caja__trasera_registro.style.display ="block";
        caja__trasera_login.style.display = "none";
    }
}

function register(){
    if (window.innerWidth > 850){
         formulario__tecnico.style.display = "none";//oculto
        fomulario_registro.style.display = "block";//oculto
        contenedor_login_register.style.left = "660px";//muestra 
        formulario__tecnico.style.display = "bnone";//muestra
        caja__trasera_registro.style.opacity ="0";//ocultar olvidaste contraseña
        caja__trasera_login.style.opacity = "1";


    }else{
        fomulario_registro.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario__tecnico.style.display = "none";
        caja__trasera_registro.style.display ="none";
        caja__trasera_login.style.display = "none";
        caja__trasera_registro.style.opacity ="0";

    }
}

// function register(){
//     if (window.innerWidth > 850){

//         fomulario_registro.style.display = "block";//muestra 
//         contenedor_login_register.style.left = "660px";//rota izquierda
//         formulario_login.style.display = "none";//se ocultan contenedor
//         caja__trasera_registro.style.opacity ="0";
//         caja__trasera_login.style.opacity = "1";
//         formulario__tecnico.style.display = "none";//se oculta contenedor
//         fomulario_registro.style.opacity="0";
//     }else {
//         fomulario_registro.style.display = "block";
//         contenedor_login_register.style.left = "0";
//         formulario_login.style.display = "none";//se oculta contenedor
//         caja__trasera_registro.style.display ="block";
//         caja__trasera_login.style.opacity = "1";
//         formulario__tecnico.style.display = "none";  //se oculta contenedor  
//     }
//}

