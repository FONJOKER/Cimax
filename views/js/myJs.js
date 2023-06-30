// -------------------- FUNCION QUE CAMBIA LA CLASE ACTIVE EN LOS ENLACES DEL MENU -------------------------------------

function actualizarEnlaceActivo() {
    // Obtener la URL actual
    var urlActual = window.location.href;

    // Buscar la ruta actual en la URL actual
    var rutaActual = urlActual.substring(urlActual.lastIndexOf('/') + 1);

    // Eliminar la clase "active" del enlace previous
    $('.nav-link.active').removeClass('active');

    // Buscar el enlace correspondiente y establecer la clase "active"
    $('a[href="' + rutaActual + '"]').addClass('active');
}

// Llamar a la función al cargar la página
$(document).ready(function () {
    actualizarEnlaceActivo();
});

// ---------------------------------------------------------------------------------------------------------------------------------


// --------------------- FUNCION QUE NOS PERMITE LA EJECUCION DE UN ARCHIVO PHP PARA ACCEDER A LA BASE DE DATOS -------------------

function getXMLHTTPRequest() {
    var obj = false;
    try {
        obj = new XMLHttpRequest(); /* Navegador Firefox, Mozilla,etc*/
    }
    catch (err1) {
        try {
            obj = new ActiveXObject("Msxml2.XMLHTTP"); /* algunas versiones IE */
        }
        catch (err2) {
            try {
                obj = new ActiveXObject("Microsoft.XMLHTTP");/*otras versiones IE */
            }
            catch (err3) {
                obj = false;
            }
        }
    }
    return obj;
}


// Esta variable sera llamada en todas las funciones que requieran de una conexion a la base de datos
// ---------------------------------------------------------------------------------------------------------------------------------


// Validar contacto
function validaContacto() {
    interruptor = 0;
    nombre = document.getElementById("nombre").value.trim();
    if (nombre == "") {
        document.getElementById("nombre_error").innerHTML = "El nombre es obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("nombre_error").innerHTML = "";
    }

    email = document.getElementById("email").value.trim();
    validaEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    if (email == "") {
        document.getElementById("email_error").innerHTML = "El email es obligatorio";
        interruptor = 1;
    }
    else {

        if (validaEmail.test(email) == false) {
            document.getElementById("email_error").innerHTML = "El email tiene el formato incorrecto";
            interruptor = 1;
        }
        else {
            document.getElementById("email_error").innerHTML = "";
        }

    }

    telefono = document.getElementById("telefono").value;
    validaTelefono = /^\d{9}$/;
    if (telefono == "") {
        document.getElementById("telefono_error").innerHTML = "El telefono es obligatorio";
        interruptor = 1;
    }
    else {

        if (validaTelefono.test(telefono) == false) {
            document.getElementById("telefono_error").innerHTML = "El telefono tiene el formato incorrecto";
            interruptor = 1;
        }
        else {
            document.getElementById("telefono_error").innerHTML = "";
        }

    }

    asunto = document.getElementById("asunto").value;
    if (asunto == "") {
        document.getElementById("asunto_error").innerHTML = "El asunto es obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("asunto_error").innerHTML = "";
    }


    mensaje = document.getElementById("mensaje").value.trim();
    if (mensaje == "") {
        document.getElementById("mensaje_error").innerHTML = "El mensaje es obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("mensaje_error").innerHTML = "";
    }

    if (interruptor == 0) {
        document.getElementById("formularioContacto").submit();
    }

}

// Validar Registro, login y recupear contraseña
function validaRegistro() {
    let interruptor = 0;
    nombre = document.getElementById("nombre").value.trim();
    if (nombre == "") {
        document.getElementById("nombre_error").innerHTML = "El nombre el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("nombre_error").innerHTML = "";
    }

    apellido1 = document.getElementById("apellido1").value.trim();
    if (apellido1 == "") {
        document.getElementById("apellido1_error").innerHTML = "El primer apellido el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("apellido1_error").innerHTML = "";
    }

    dni = document.getElementById("dni").value.trim();
    dni = dni.toUpperCase()
    validaDni = /^[XYZ]?\d{5,8}[A-Z]$/;
    if (dni == "") {
        document.getElementById("dni_error").innerHTML = "El dni/nie el obligatorio";
        interruptor = 1;
    }
    else {

        if (validaDni.test(dni) == false) {
            document.getElementById("dni_error").innerHTML = "El dni/nie no tiene el formato correcto";
            interruptor = 1;
        }
        else {
            document.getElementById("dni_error").innerHTML = "";
        }

    }

    email = document.getElementById("email").value.trim();
    validaEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    if (email == "") {
        document.getElementById("email_error").innerHTML = "El email el obligatorio";
        interruptor = 1;
    }
    else {

        if (validaEmail.test(email) == false) {
            document.getElementById("email_error").innerHTML = "El email tiene el formato incorrecto";
            interruptor = 1;
        }
        else {
            document.getElementById("email_error").innerHTML = "";
        }

    }

    pass = document.getElementById("pass").value.trim();
    if (pass == "") {
        document.getElementById("pass_error").innerHTML = "El password el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("pass_error").innerHTML = "";
    }

    pass2 = document.getElementById("pass2").value.trim();
    if (pass2 == "") {
        document.getElementById("pass2_error").innerHTML = "La confirmacion de password es obligatoria";
        interruptor = 1;
    }
    else {
        document.getElementById("pass2_error").innerHTML = "";
    }

    if (pass != "" && pass2 != "") {
        if (pass2 != pass) {
            document.getElementById("pass2_error").innerHTML = "Las contraseñas no coinciden";
            interruptor = 1;
        }
        else {
            document.getElementById("pass2_error").innerHTML = "";
        }
    }

    if (interruptor == 0) {


        // -------------------- EJECUCION DE UN ARCHIVO PHP PARA HACE RUNA CONSULTA A LA BASE DE DATOS -----------------------------
        // -------------------- Consulta para comprobar la disponibilidad del correo y del dni -----------------------------------------------

        var xmlhttp = getXMLHTTPRequest();
        var url = "views/js/scripts/validaRegistro.php";
        // se abre la conexión con el servidor
        xmlhttp.open("POST", url);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = respuestaServidor;
        xmlhttp.send("email=" + email + "&dni=" + dni);

        // Creamos la función que hace de gestor de evento
        function respuestaServidor() {
            // comprobamos si el estado es "completado"
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {

                    if (xmlhttp.responseText == 1) {
                        document.getElementById("email_error").innerHTML = "Ya hay un usuario registrado con ese correo electronico";
                        document.getElementById("dni_error").innerHTML = "";

                    }
                    else if (xmlhttp.responseText == 2) {
                        document.getElementById("dni_error").innerHTML = "Ya hay un usuario registrado con ese dni";
                        document.getElementById("email_error").innerHTML = "";
                    }
                    else if (xmlhttp.responseText == 3) {
                        document.getElementById("email_error").innerHTML = "Ya hay un usuario registrado con ese correo electronico";
                        document.getElementById("dni_error").innerHTML = "Ya hay un usuario registrado con ese dni";
                    }
                    else {
                        document.getElementById("dni_error").innerHTML = "";
                        document.getElementById("email_error").innerHTML = "";
                        document.getElementById("formularioRegistro").submit();

                    }
                    // document.getElementById("email_error").innerHTML=xmlhttp.responseText;
                }
                else {
                    // mandamos una alerta con el mensaje de error
                    alert(xmlhttp.statusText);
                }
            }

        }
    }



}

function validaLogin() {
    interruptor = 0;

    email = document.getElementById("email").value.trim();
    validaEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    if (email == "") {
        document.getElementById("email_error").innerHTML = "El email el obligatorio";
        interruptor = 1;
    }
    else {

        if (validaEmail.test(email) == false) {
            document.getElementById("email_error").innerHTML = "El email tiene el formato incorrecto";
            interruptor = 1;
        }
        else {
            document.getElementById("email_error").innerHTML = "";
        }

    }

    pass = document.getElementById("pass").value.trim();
    if (pass == "") {
        document.getElementById("pass_error").innerHTML = "El password el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("pass_error").innerHTML = "";
    }

    if (interruptor == 0) {
        // -------------------- EJECUCION DE UN ARCHIVO PHP PARA HACE RUNA CONSULTA A LA BASE DE DATOS -----------------------------
        // -------------------- Consulta para comprobar la disponibilidad del correo y del dni -----------------------------------------------

        var xmlhttp = getXMLHTTPRequest();
        var url = "views/js/scripts/validaLogin.php";
        // se abre la conexión con el servidor
        xmlhttp.open("POST", url);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = respuestaServidor;
        xmlhttp.send("email=" + email + "&pass=" + pass);

        function respuestaServidor() {
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {

                    if (xmlhttp.responseText >= 1) {
                        document.getElementById("login_error").innerHTML = "Correo y/o contraseña incorrectos";

                    }
                    else {
                        document.getElementById("login_error").innerHTML = "";
                        document.getElementById("formularioLogin").submit();

                    }
                    // document.getElementById("email_error").innerHTML=xmlhttp.responseText;
                }
                else {
                    // mandamos una alerta con el mensaje de error
                    alert(xmlhttp.statusText);
                }
            }

        }
        
    }


}

function validaRecuperar() {
    interruptor = 0;

    email = document.getElementById("email").value.trim();
    validaEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    if (email == "") {
        document.getElementById("email_error").innerHTML = "El email el obligatorio";
        interruptor = 1;
    }
    else {

        if (validaEmail.test(email) == false) {
            document.getElementById("email_error").innerHTML = "El email tiene el formato incorrecto";
            interruptor = 1;
        }
        else {
            document.getElementById("email_error").innerHTML = "";
        }

    }

    if (interruptor == 0) {
        // -------------------- EJECUCION DE UN ARCHIVO PHP PARA HACE RUNA CONSULTA A LA BASE DE DATOS -----------------------------
        // -------------------- Consulta para comprobar la disponibilidad del correo y del dni -----------------------------------------------

        var xmlhttp = getXMLHTTPRequest();
        var url = "views/js/scripts/validaRecuperar.php";
        // se abre la conexión con el servidor
        xmlhttp.open("POST", url);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = respuestaServidor;
        xmlhttp.send("email=" + email);

        function respuestaServidor() {
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {

                    if (xmlhttp.responseText == 1) {
                        document.getElementById("login_error").innerHTML = "No hay ningun usuario asociado a ese correo";

                    }
                    else {
                        document.getElementById("login_error").innerHTML = "";
                        document.getElementById("formularioRecuperar").submit();

                    }
                    // document.getElementById("email_error").innerHTML=xmlhttp.responseText;
                }
                else {
                    // mandamos una alerta con el mensaje de error
                    alert(xmlhttp.statusText);
                }
            }

        }
        
    }


}

// Ver y editar perfil
function validaEditarPerfil(id) {

    let interruptor = 0;
    nombre = document.getElementById("nombre").value.trim();
    if (nombre == "") {
        document.getElementById("nombre_error").innerHTML = "El nombre el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("nombre_error").innerHTML = "";
    }

    apellido1 = document.getElementById("apellido1").value.trim();
    if (apellido1 == "") {
        document.getElementById("apellido1_error").innerHTML = "El primer apellido el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("apellido1_error").innerHTML = "";
    }

    dni = document.getElementById("dni").value.trim();
    dni = dni.toUpperCase()
    validaDni = /^[XYZ]?\d{5,8}[A-Z]$/;
    if (dni == "") {
        document.getElementById("dni_error").innerHTML = "El dni/nie el obligatorio";
        interruptor = 1;
    }
    else {

        if (validaDni.test(dni) == false) {
            document.getElementById("dni_error").innerHTML = "El dni/nie no tiene el formato incorrecto";
            interruptor = 1;
        }
        else {
            document.getElementById("dni_error").innerHTML = "";
        }

    }

    email = document.getElementById("email").value.trim();
    validaEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    if (email == "") {
        document.getElementById("email_error").innerHTML = "El email el obligatorio";
        interruptor = 1;
    }
    else {

        if (validaEmail.test(email) == false) {
            document.getElementById("email_error").innerHTML = "El email tiene el formato incorrecto";
            interruptor = 1;
        }
        else {
            document.getElementById("email_error").innerHTML = "";
        }

    }

    pass = document.getElementById("pass").value.trim();
    pass2 = document.getElementById("pass2").value.trim();

    if (pass != "" || pass2 != "") {

        if (pass != "" && pass2 != "") {
            if (pass2 != pass) {
                document.getElementById("pass2_error").innerHTML = "Las contraseñas no coinciden";
                interruptor = 1;
            }
            else {
                document.getElementById("pass2_error").innerHTML = "";
                document.getElementById("pass_error").innerHTML = "";
            }
        }
        else {
            interruptor = 1;
            document.getElementById("pass2_error").innerHTML = "Si vas a cambiar la contraseña debes rellenar ambos campos";
        }
    }
    else {
        document.getElementById("pass2_error").innerHTML = "";
        document.getElementById("pass_error").innerHTML = "";
    }

    //  ---------------------------------- VALIDAR IMAGEN ----------------------------------------------------------------------

    imagen = document.getElementById("imagen").value.trim();
    if (imagen != "") {

        var input =  document.getElementById("imagen");
        var file = input.files[0];
        var fileName = input.value;
        var maxSize = 2097152; //bytes
        var extensions = new RegExp(/.jpg|.jpeg|.png/i); //Extensiones válidas

        var error = {
            state: false,
            msg: ''
        };

        if (input.files && file) {

            for (var i = fileName.length - 1; i >= 0; i--) {

                if (fileName[i] == '.') {

                    var ext = fileName.substring(fileName[i], fileName.length);

                    if (!extensions.test(ext)) {
                        error.state = true;
                        document.getElementById("imagen_error").innerHTML = "La imagen debe ser png o jpg";
                        interruptor = 1;
                    }
                    else
                    {
                        document.getElementById("imagen_error").innerHTML = "";
                    }

                    break;
                }

            }

            if (file.size > maxSize) {
                error.state = true;
                document.getElementById("imagen_error").innerHTML = "La imagen no debe pesar mas de 2 MB";
                interruptor = 1;
            }
            else
            {
                document.getElementById("imagen_error").innerHTML = "";
            }


        }
    }

    if (interruptor == 0) {


        // -------------------- EJECUCION DE UN ARCHIVO PHP PARA HACE RUNA CONSULTA A LA BASE DE DATOS -----------------------------
        // -------------------- Consulta para comprobar la disponibilidad del correo y del dni -----------------------------------------------

        var xmlhttp = getXMLHTTPRequest();
        var url = "views/js/scripts/validaEditar.php";
        // se abre la conexión con el servidor
        xmlhttp.open("POST", url);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = respuestaServidor;
        xmlhttp.send("email=" + email + "&dni=" + dni + "&id=" + id);

        // Creamos la función que hace de gestor de evento
        function respuestaServidor() {
            // comprobamos si el estado es "completado"
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {

                    if (xmlhttp.responseText == 1) {
                        document.getElementById("email_error").innerHTML = "Ya hay un usuario registrado con ese correo electronico";
                        document.getElementById("dni_error").innerHTML = "";

                    }
                    else if (xmlhttp.responseText == 2) {
                        document.getElementById("dni_error").innerHTML = "Ya hay un usuario registrado con ese dni";
                        document.getElementById("email_error").innerHTML = "";
                    }
                    else if (xmlhttp.responseText == 3) {
                        document.getElementById("email_error").innerHTML = "Ya hay un usuario registrado con ese correo electronico";
                        document.getElementById("dni_error").innerHTML = "Ya hay un usuario registrado con ese dni";
                    }
                    else {
                        document.getElementById("dni_error").innerHTML = "";
                        document.getElementById("email_error").innerHTML = "";
                        document.getElementById("formularioEditarPerfil").submit();

                    }
                    // document.getElementById("email_error").innerHTML=xmlhttp.responseText;
                }
                else {
                    // mandamos una alerta con el mensaje de error
                    alert(xmlhttp.statusText);
                }
            }

        }
    }




}
function verEditarPerfil()
{
    event.preventDefault();
    const miDiv = document.getElementById('formEditar');
    if (miDiv.classList.contains('d-none')) {
        // Al mostrar el formulario le quitamos la clase activa a los demas enlace y ocultamos las demas secciones
        $("#botonCalendario").removeClass("active");
        $("#botonNotificaciones").removeClass("active");
        $('#notificacionesPendientes').hide("slow");
        $('#notificacionesVistas').hide("slow");

        $('#formEditar').hide();
        $("#formEditar").removeClass("d-none");
    }


    if ($('#formEditar').is(":visible")) {
        $('#formEditar').hide("slow");
        $("#botonEditar").removeClass("active");
    }
    else
    {
        // Al mostrar el formulario le quitamos la clase activa a los demas enlace y ocultamos las demas secciones
        $("#botonCalendario").removeClass("active");
        $("#botonNotificaciones").removeClass("active");
        $('#notificacionesPendientes').hide("slow");
        $('#notificacionesVistas').hide("slow");

        $("#formEditar").show("slow");
        $("#botonEditar").addClass("active");
        $("#botonCalendario").removeClass("active");
    }



    

}

// Ver, mandar y elimnar notificaciones y/o notificaciones vistas
function verNotificaciones()
{
    event.preventDefault();
    const miDiv = document.getElementById('notificacionesPendientes');
    if (miDiv.classList.contains('d-none')) {
        // Al mostrar el formulario le quitamos la clase activa a los demas enlace y ocultamos las demas secciones
        $("#botonCalendario").removeClass("active");
        $("#botonEditar").removeClass("active");
        $('#formEditar').hide("slow");
        $('#notificacionesVistas').hide("slow");
        $('#cuenta_notificaciones').hide("slow");

        $('#notificacionesPendientes').hide();
        $("#notificacionesPendientes").removeClass("d-none");

        var xmlhttp = getXMLHTTPRequest();
        var url = "views/js/scripts/verNotificaciones.php";
        // se abre la conexión con el servidor
        xmlhttp.open("GET", url);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = respuestaServidor;
        xmlhttp.send(null);

        // Creamos la función que hace de gestor de evento
        function respuestaServidor() {
            // comprobamos si el estado es "completado"
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {

                }
                else {
                    // mandamos una alerta con el mensaje de error
                    alert(xmlhttp.statusText);
                }
            }

        }
    }


    if ($('#notificacionesPendientes').is(":visible")) {
        $('#notificacionesVistas').hide("slow");
        $('#notificacionesPendientes').hide("slow");
        $("#botonNotificaciones").removeClass("active");
    }
    else
    {
        // Al mostrar el formulario le quitamos la clase activa a los demas enlace y ocultamos las demas secciones
        $("#botonCalendario").removeClass("active");
        $("#botonEditar").removeClass("active");
        $('#formEditar').hide("slow");

        $("#notificacionesPendientes").show("slow");
        $("#botonNotificaciones").addClass("active");
    }



    

}

function verNotificacionesVistas()
{
    event.preventDefault();
    const miDiv = document.getElementById('notificacionesVistas');
    if (miDiv.classList.contains('d-none')) {
        // Al mostrar el formulario le quitamos la clase activa a los demas enlace y ocultamos las demas secciones
        $("#botonCalendario").removeClass("active");
        $("#botonEditar").removeClass("active");
        $('#formEditar').hide("slow");

        $('#notificacionesVistas').hide();
        $("#notificacionesVistas").removeClass("d-none");
    }


    if ($('#notificacionesVistas').is(":visible")) {
        $('#notificacionesVistas').hide("slow");
    }
    else
    {
        // Al mostrar el formulario le quitamos la clase activa a los demas enlace y ocultamos las demas secciones
        $("#botonCalendario").removeClass("active");
        $("#botonEditar").removeClass("active");
        $('#formEditar').hide("slow");

        $("#notificacionesVistas").show("slow");
    }



    

}

function validaMandarNotificacion(editor) {
    let interruptor = 0;
    mensaje = editor.getData().trim();
    if (mensaje == " " || mensaje == "") {
        document.getElementById("mensaje_error").innerHTML = "El mensaje es obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("mensaje_error").innerHTML = "";
    }

    if (interruptor == 0) {

        document.getElementById("mandarNotificacion").submit();

    }




}

function eliminarNotificacion(id)
{
    $('#notificacion'+id).hide("slow");

    var xmlhttp = getXMLHTTPRequest();
        var url = "views/js/scripts/eliminarNotificacion.php";
        // se abre la conexión con el servidor
        xmlhttp.open("POST", url);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = respuestaServidor;
        xmlhttp.send("id=" + id);

        // Creamos la función que hace de gestor de evento
        function respuestaServidor() {
            // comprobamos si el estado es "completado"
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {

                }
                else {
                    // mandamos una alerta con el mensaje de error
                    alert(xmlhttp.statusText);
                }
            }

        }
}

// Ver y cargar calendario
function verCalendario()
{
    event.preventDefault();
    // Al mostrar el formulario le quitamos la clase activa a los demas enlace y ocultamos las demas secciones
    $("#botonNotificaciones").removeClass("active");
    $("#botonEditar").removeClass("active");
    $("#formEditar").hide("slow");
    $('#notificacionesPendientes').hide("slow");
    $('#notificacionesVistas').hide("slow");

    $("#botonCalendario").addClass("active");
    
    
    $("#calendario").show("slow");
}

function cargaCalendarioCliente()
{
    
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendario');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
        start: 'title',
        end: 'today prev,next'
        },
        // contentHeight:"auto", 
        locale: 'es',
        firstDay: 1,
        buttonText: {
        today: 'Hoy',
        month: 'Mes',
        week: 'Semana',
        day: 'Día',
        list: 'Agenda'
        },
        eventClick: function(info) {
            // Obtener los datos del evento que ha sido clicado
            var id = info.event.id;
            var nombre = info.event.title;
            var imagen = info.event.extendedProps.imagen;
            var contenido = info.event.extendedProps.descripcion;
        
            // Actualizar el contenido del modal
            var modalTitulo = document.getElementById("modal-evento-titulo");
            modalTitulo.textContent = nombre;
        
            var modalImagen = document.getElementById("modal-evento-imagen");
            modalImagen.src = imagen;
        
            var modalContenido = document.getElementById("modal-evento-contenido");
            modalContenido.textContent = contenido;

            var modalEnlace = document.getElementById("modal-evento-enlace");
            modalEnlace.href = "index.php?ruta=servicio-detalle&id="+id+"";
        
            // Mostrar el modal
            $('#modal-servicio').modal('show');
            $('#id_servicio_notificar').val(id);
            
          },
        events: 'views/js/scripts/servicios.php'
    });
    calendar.render();
    });

}

// Ver alumnos


function verAlumnos()
{
    event.preventDefault();
    $("#tablaAlumnos").removeClass("d-none");
    $("#tablaAlumnos").fadeToggle("slow");

    

}

// -------------------------- CRUD PUBLICACIONES ----------------------------------------------------

function validaInsertarPublicacion(editor) {
    let interruptor = 0;
    titulo = document.getElementById("titulo").value.trim();
    if (titulo == "") {
        document.getElementById("titulo_error").innerHTML = "El titulo el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("titulo_error").innerHTML = "";
    }

    descripcion_corta = document.getElementById("descripcion_corta").value.trim();
    if (descripcion_corta == "") {
        document.getElementById("descripcion_corta_error").innerHTML = "La descripcion corta es obligatoria";
        interruptor = 1;
    }
    else {
        document.getElementById("descripcion_corta_error").innerHTML = "";
    }

    descripcion = editor.getData().trim();
    if (descripcion == "") {
        document.getElementById("descripcion_error").innerHTML = "La descripcion larga es obligatoria";
        interruptor = 1;
    }
    else {
        document.getElementById("descripcion_error").innerHTML = "";
    }

    imagen = document.getElementById("imagen").value.trim();

    if (imagen != "") {

        var input = document.getElementById("imagen");
        var file = input.files[0];
        var fileName = input.value;
        var maxSize = 2097152; //bytes
        var extensions = new RegExp(/.jpg|.jpeg|.png/i); //Extensiones válidas

        var error = {
            state: false,
            msg: ''
        };

        if (input.files && file) {

            for (var i = fileName.length - 1; i >= 0; i--) {

                if (fileName[i] == '.') {

                    var ext = fileName.substring(fileName[i], fileName.length);

                    if (!extensions.test(ext)) {
                        error.state = true;
                        document.getElementById("imagen_error").innerHTML = "La imagen debe ser png o jpg";
                        interruptor = 1;
                    }
                    else {
                        document.getElementById("imagen_error").innerHTML = "";
                    }
                    
                    break;
                }

            }

            if(interruptor == 0)
            {
                
                if (file.size > maxSize) {
                    error.state = true;
                    document.getElementById("imagen_error").innerHTML = "La imagen no debe pesar mas de 2 MB";
                    interruptor = 1;
                }
                else {
                    document.getElementById("imagen_error").innerHTML = "";
                }
            }


        }
    }

    if (interruptor == 0) {

        document.getElementById("formularioInsertarPublicacion").submit();

    }



}

function validaEditarPublicacion(id,editor) {
    let interruptor = 0;
    titulo = document.getElementById("titulo" + id).value.trim();
    if (titulo == "") {
        document.getElementById("titulo_error" + id).innerHTML = "El titulo el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("titulo_error" + id).innerHTML = "";
    }

    descripcion_corta = document.getElementById("descripcion_corta" + id).value.trim();
    if (descripcion_corta == "") {
        document.getElementById("descripcion_corta_error" + id).innerHTML = "La descripcion corta es obligatoria";
        interruptor = 1;
    }
    else {
        document.getElementById("descripcion_corta_error" + id).innerHTML = "";
    }

    descripcion = editor.getData().trim();
    if (descripcion == "") {
        document.getElementById("descripcion_error" + id).innerHTML = "La descripcion larga es obligatoria";
        interruptor = 1;
    }
    else {
        document.getElementById("descripcion_error" + id).innerHTML = "";
    }

    imagen = document.getElementById("imagen" + id).value.trim();

    if (imagen != "") {

        var input = document.getElementById("imagen" + id);
        var file = input.files[0];
        var fileName = input.value;
        var maxSize = 2097152; //bytes
        var extensions = new RegExp(/.jpg|.jpeg|.png/i); //Extensiones válidas

        var error = {
            state: false,
            msg: ''
        };

        if (input.files && file) {

            for (var i = fileName.length - 1; i >= 0; i--) {

                if (fileName[i] == '.') {

                    var ext = fileName.substring(fileName[i], fileName.length);

                    if (!extensions.test(ext)) {
                        error.state = true;
                        document.getElementById("imagen_error" + id).innerHTML = "La imagen debe ser png o jpg";
                        interruptor = 1;
                    }
                    else {
                        document.getElementById("imagen_error" + id).innerHTML = "";
                    }
                    
                    break;
                }

            }

            if(interruptor == 0)
            {
                
                if (file.size > maxSize) {
                    error.state = true;
                    document.getElementById("imagen_error" + id).innerHTML = "La imagen no debe pesar mas de 2 MB";
                    interruptor = 1;
                }
                else {
                    document.getElementById("imagen_error" + id).innerHTML = "";
                }
            }


        }
    }

    if (interruptor == 0) {

        document.getElementById("formularioEditarPublicacion" + id).submit();

    }



}

function validaEliminarPublicacion(id) {

    form = document.getElementById("formularioEliminarPublicacion" + id);

    Swal.fire({
        title: 'Quieres borrar esta publicacion?',
        text: "El cambio no podra revertirse ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
}

// Mandar y eliminar comentarios

function validaInsertarComentario()
{
    let interruptor = 0;
    comentario = document.getElementById("comentario").value.trim();
    if (comentario == "") {
        document.getElementById("comentario_error").innerHTML = "El comentario es obligatorio";
        interruptor = 1;
    }
    else if(comentario.length < 15)
    {
        document.getElementById("comentario_error").innerHTML = "El comentario debe contener al menos 15 caracteres";
        interruptor = 1;
    }
    else {
        document.getElementById("comentario_error").innerHTML = "";
    }

    if (interruptor == 0) {
        document.getElementById("formularioInsertarComentario").submit();
    }
}

function validaEliminarComentario(id) {

    event.preventDefault();
    form = document.getElementById("formularioEliminarComentario" + id);

    Swal.fire({
        title: 'Quieres borrar este comentario?',
        text: "El cambio no podra revertirse ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
}

function cuentaLetras()
{
    comentario = $("#comentario").val();

    document.getElementById("comentario_error").innerHTML = 175-comentario.length+" caracteres restantes";

}

function cuentaLetrasEditar(id)
{
    comentario = $("#comentario"+id).val();

    document.getElementById("comentario_error"+id).innerHTML = 175-comentario.length+" caracteres restantes";

}

function editarComentario(id)
{
    event.preventDefault();
    comentario = $("#comentario"+id);

    form1 = $("#formularioEliminarComentario"+id);
    form2 = $("#formularioEditarComentario"+id);

    if (form1.is(":visible")) {
        form1.hide("slow");

        form2.hide();
        form2.removeClass("d-none");
        form2.show("slow");

        comentario.removeAttr("readonly");
    }


}

function validaEditarComentario(id)
{
    event.preventDefault();
    let interruptor = 0;
    comentario = document.getElementById("comentario"+id).value.trim();
    if (comentario == "") {
        document.getElementById("comentario_error"+id).innerHTML = "El comentario es obligatorio";
        interruptor = 1;
    }
    else if(comentario.length < 15)
    {
        document.getElementById("comentario_error"+id).innerHTML = "El comentario debe contener al menos 15 caracteres";
        interruptor = 1;
    }
    else {
        document.getElementById("comentario_error"+id).innerHTML = "";
    }

    if (interruptor == 0) {
        $("#nuevo_comentario"+id).val(comentario.trim());
        document.getElementById("formularioEditarComentario"+id).submit();
    }
}

function cancelarEdicion(id,original)
{
    event.preventDefault();
    let interruptor = 0;
    comentario = $("#comentario"+id);

    form1 = $("#formularioEliminarComentario"+id);
    form2 = $("#formularioEditarComentario"+id);

    if (form2.is(":visible")) {
        form2.hide("slow");
        form1.show("slow");
        comentario.val(original);
        document.getElementById("comentario_error"+id).innerHTML = "";
        comentario.attr("readonly","readonly");
    }
}

function imprimir(elemento)
{
    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
      setTimeout(function(){
        const $elementoParaConvertir = document.getElementById(elemento); // <-- Aquí puedes elegir cualquier elemento del DOM
        html2pdf()
            .set({
                margin: 3, // <-- Aquí puedes elegir el margen
                filename: 'tarjeta-usuario.pdf', // <-- Aquí puedes elegir el nombre del documento
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 3, // A mayor escala, mejores gráficos, pero más peso
                    letterRendering: true,
                },
                jsPDF: {
                    unit: "in",
                    format: "a3", // <-- Aquí puedes elegir el formato de la pagina en la que se va a imprimir
                    orientation: 'portrait' // landscape o portrait // <-- Aquí puedes elegir la orientacion, vertical u horizontal
            }})
            .from($elementoParaConvertir)
            .save()
            .catch(err => console.log(err));
      }, 350);
        
}


// function imprimir(elemento)
// {
//     var contenido= document.getElementById(elemento).innerHTML;
//      var contenidoOriginal= document.body.innerHTML;

//      document.body.innerHTML = contenido;

//      window.print();

//      document.body.innerHTML = contenidoOriginal;
        
// }