//Boton enviar debe llevar la información a un alert con los datos ingresados
//Boton limpiar debe limpiar los campos de texto

btnEnviar.addEventListener('click' , alertaEnviar); 
btnBorrar.addEventListener('click' , limpiarCampos);


function alertaEnviar(){

    let nombre = document.getElementById("nombre");
    let email = document.getElementById("email");
    let mensaje = document.getElementById("mensaje");

    if(nombre?.value == "" || email?.value == "" || mensaje?.value == ""){
        alert("Debe completar todos los campos");
    }else{
        alert("Nombre: " + nombre?.value + "\nEmail: " + email?.value + "\nMensaje: " + mensaje?.value);
    }
}

function limpiarCampos(){
    let nombre = document.getElementById("nombre");
    let email = document.getElementById("email");
    let mensaje = document.getElementById("mensaje");

    nombre.value = "";
    email.value = "";
    mensaje.value = "";
}

