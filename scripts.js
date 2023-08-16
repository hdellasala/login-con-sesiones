var contador=0;

function borrarCookie() {
    document.getElementById('borrar').setAttribute('type', 'hidden');
    document.cookie = 'nombre=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    comprobarCookie();

}

function crearCookie() {
    clave="nombre";
    diasexpiracion=1;
    valor = valorcookie.value;
    var d = new Date();
    d.setTime(d.getTime() + (diasexpiracion * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = clave + "=" + valor + "; " + "path=/;" + expires ;
    comprobarCookie();
}


function obtenerCookie(clave) {
    var name = clave + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function comprobarSesion() {

    nombre = sessionStorage.getItem("nombre");
    console.log(nombre);
    if (nombre != "") {
        document.getElementById("estados").innerText='Hola ' + nombre + ', Bienvenid@ Has iniciado sesions';
        document.getElementById('borrar').setAttribute('type', 'button');
        document.getElementById("estados").style.background='#ff5';
        return true; // La cookie existe. 
    } else {
        document.getElementById("estados").style.background='#000';
        document.getElementById("estados").innerText='La Sesion NO se ha establecido!';
        return false;// La cookie no existe. 
    }
}
comprobarSesion();