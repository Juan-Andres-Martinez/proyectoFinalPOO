const btnInicioSesion = document.getElementById("Inicio-Sesion"),
      btnRegistro = document.getElementById("Registrarse"),
      formRegistro= document.querySelector(".Registro"),
      formInicioSesion = document.querySelector(".Inicio");

btnInicioSesion.addEventListener("click", e => {
    formInicioSesion.classList.remove("hide");
    formRegistro.classList.add("hide");
})
btnRegistro.addEventListener("click", e => {
    formInicioSesion.classList.add("hide");
    formRegistro.classList.remove("hide");
})