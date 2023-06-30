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

// Obtener la URL actual
var currentURL = window.location.href;
// Obtener todos los elementos <li> dentro del menú
var menuItems = document.querySelectorAll('li');
// Poner los active a los menus y submenus al recargar la pagina
menuItems.forEach(function(item) {
    id = item.getAttribute("id");

    if(currentURL.includes("spr") && currentURL.includes(id))
    {
        item.classList.add("active");
        item.classList.add("expand");
        $("#estilos-privados2").click();
        if(currentURL.includes("boton"))
        {
            $("#boton").parent().addClass("active");
            $("#boton").click();
            
        }

        if(currentURL.includes("icono"))
        {
            $("#icono").parent().addClass("active");
            $("#icono").click();
            
        }

        if(currentURL.includes("form"))
        {
            $("#form").parent().addClass("active");
            $("#form").click();
            
        }

        if(currentURL.includes("widget"))
        {
            $("#widget").parent().addClass("active");
            $("#widget").click();
            
        }
    }
    else if(currentURL.includes("spp") && currentURL.includes(id))
    {
        item.classList.add("active");
        item.classList.add("expand");
        $("#estilos-publicos2").click();
    }
    else if(currentURL.includes(id))
    {
        item.classList.add("active");
    }


});

function cargarDatos()
{
  var splinaArea1 = document.querySelector("#spline-area-1");
if (splinaArea1 !== null) {
  var splinaAreaOptions1 = {
    chart: {
      id: "spline-area-1",
      group: "social",
      height: 135,
      width: "100%",
      background: "#fd5190",
      type: "area",
      sparkline: {
        enabled: true,
      },
    },
    yaxis: {
      labels: {
        minWidth: 40,
      },
    },
    stroke: {
      width: 2,
    },
    colors: ["rgba(255, 255, 255, .6)"],
    fill: {
      type: "gradient",
      gradient: {
        shade: "light",
        shadeIntensity: 1,
        opacityFrom: 0.3,
        opacityTo: 0.3,
        stops: [0, 50, 100],
      },
    },

    tooltip: {
      theme: "dark",
      marker: {
        show: false,
      },
      x: {
        show: false,
      },
      y: {
        title: {
          formatter: function () {
            return "";
          },
        },
      },
    },

    series: [
      {
        data: [0, 15, 18, 20, 16, 17, 23, 17, 25],
      },
    ],
  };
  var randerSplinaArea1 = new ApexCharts(splinaArea1, splinaAreaOptions1);
  randerSplinaArea1.render();
}
}

// -------------------------- CRUD USUARIOS ----------------------------------------------------

function validaInsertarUsuario() {
    let interruptor = 0;
    nombre = document.getElementById("nombre").value;
    if (nombre == "") {
        document.getElementById("nombre_error").innerHTML = "El nombre el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("nombre_error").innerHTML = "";
    }

    apellido1 = document.getElementById("apellido1").value;
    if (apellido1 == "") {
        document.getElementById("apellido1_error").innerHTML = "El primer apellido el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("apellido1_error").innerHTML = "";
    }

    dni = document.getElementById("dni").value;
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

    email = document.getElementById("email").value;
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

    pass = document.getElementById("pass").value;
    if (pass == "") {
        document.getElementById("pass_error").innerHTML = "El password el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("pass_error").innerHTML = "";
    }

    pass2 = document.getElementById("pass2").value;
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
        var url = "views/js/scripts/validaInsertarUsuario.php";
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
                        document.getElementById("formularioInsertar").submit();

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

function validaEditarUsuario(id) {

    let interruptor = 0;
    nombre = document.getElementById("nombre" + id).value;
    if (nombre == "") {
        document.getElementById("nombre_error" + id).innerHTML = "El nombre el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("nombre_error" + id).innerHTML = "";
    }

    apellido1 = document.getElementById("apellido1" + id).value;
    if (apellido1 == "") {
        document.getElementById("apellido1_error" + id).innerHTML = "El primer apellido el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("apellido1_error" + id).innerHTML = "";
    }

    dni = document.getElementById("dni" + id).value;
    dni = dni.toUpperCase()
    validaDni = /^[XYZ]?\d{5,8}[A-Z]$/;
    if (dni == "") {
        document.getElementById("dni_error" + id).innerHTML = "El dni/nie el obligatorio";
        interruptor = 1;
    }
    else {

        if (validaDni.test(dni) == false) {
            document.getElementById("dni_error" + id).innerHTML = "El dni/nie no tiene el formato incorrecto";
            interruptor = 1;
        }
        else {
            document.getElementById("dni_error" + id).innerHTML = "";
        }

    }

    email = document.getElementById("email" + id).value;
    validaEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    if (email == "") {
        document.getElementById("email_error" + id).innerHTML = "El email el obligatorio";
        interruptor = 1;
    }
    else {

        if (validaEmail.test(email) == false) {
            document.getElementById("email_error" + id).innerHTML = "El email tiene el formato incorrecto";
            interruptor = 1;
        }
        else {
            document.getElementById("email_error" + id).innerHTML = "";
        }

    }

    pass = document.getElementById("pass" + id).value;
    pass2 = document.getElementById("pass2" + id).value;

    if (pass != "" || pass2 != "") {

        if (pass != "" && pass2 != "") {
            if (pass2 != pass) {
                document.getElementById("pass2_error" + id).innerHTML = "Las contraseñas no coinciden";
                interruptor = 1;
            }
            else {
                document.getElementById("pass2_error" + id).innerHTML = "";
                document.getElementById("pass_error" + id).innerHTML = "";
            }
        }
        else {
            interruptor = 1;
            document.getElementById("pass2_error" + id).innerHTML = "Si vas a cambiar la contraseña debes rellenar ambos campos";
        }
    }
    else {
        document.getElementById("pass2_error" + id).innerHTML = "";
        document.getElementById("pass_error" + id).innerHTML = "";
    }

    //  ---------------------------------- VALIDAR IMAGEN ----------------------------------------------------------------------

    imagen = document.getElementById("imagen" + id).value;

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


        // -------------------- EJECUCION DE UN ARCHIVO PHP PARA HACE RUNA CONSULTA A LA BASE DE DATOS -----------------------------
        // -------------------- Consulta para comprobar la disponibilidad del correo y del dni -----------------------------------------------

        var xmlhttp = getXMLHTTPRequest();
        var url = "views/js/scripts/validaEditarUsuario.php";
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
                        document.getElementById("email_error" + id).innerHTML = "Ya hay un usuario registrado con ese correo electronico";
                        document.getElementById("dni_error" + id).innerHTML = "";

                    }
                    else if (xmlhttp.responseText == 2) {
                        document.getElementById("dni_error" + id).innerHTML = "Ya hay un usuario registrado con ese dni";
                        document.getElementById("email_error" + id).innerHTML = "";
                    }
                    else if (xmlhttp.responseText == 3) {
                        document.getElementById("email_error" + id).innerHTML = "Ya hay un usuario registrado con ese correo electronico";
                        document.getElementById("dni_error" + id).innerHTML = "Ya hay un usuario registrado con ese dni";
                    }
                    else {
                        document.getElementById("dni_error" + id).innerHTML = "";
                        document.getElementById("email_error" + id).innerHTML = "";
                        document.getElementById("formularioEditarUsuario" + id).submit();

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

function validaEliminarUsuario(id) {

    form = document.getElementById("#formularioEliminarUsuario" + id);

    Swal.fire({
        title: 'Quieres borrar este usuario?',
        text: "Se borraran todos los registros relacionados con el usuario (inscripciones a servicios y comentarios) ,este cambio no podra revertirse ",
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

// -------------------------- CRUD SERVICIOS ----------------------------------------------------

function validaInsertarServicio(editor) {
    let interruptor = 0;
    nombre = document.getElementById("nombre").value.trim();
    if (nombre == "") {
        document.getElementById("nombre_error").innerHTML = "El nombre el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("nombre_error").innerHTML = "";
    }

    descripcion = editor.getData().trim();
    if (descripcion == "") {
        document.getElementById("descripcion_error").innerHTML = "La descripcion es obligatoria";
        interruptor = 1;
    }
    else {
        document.getElementById("descripcion_error").innerHTML = "";
    }
    var f_hoy = new Date();
    var dia = f_hoy.getDate();
    var mes = f_hoy.getMonth() + 1;
    var anio = f_hoy.getFullYear();

    var f_hoy = anio + "/" + mes + "/" + dia;
    var f_hoy_javascript = Date.parse(f_hoy);

    f_inicio = document.getElementById("f_inicio").value.trim();
    var f_inicio_javascript = Date.parse(f_inicio);
    if (f_inicio == "") {
        document.getElementById("f_inicio_error").innerHTML = "La fecha de inicio es obligatoria";
        interruptor = 1;
    }
    else {
        if (f_inicio_javascript <= f_hoy_javascript) {
            document.getElementById("f_inicio_error").innerHTML = "La fecha de inicio no puede ser anterior a la actual";
            interruptor = 1;
        }
        else {
            document.getElementById("f_inicio_error").innerHTML = "";
        }
    }



    f_fin = document.getElementById("f_fin").value.trim();
    var f_fin_javascript = Date.parse(f_fin);

    if (f_fin == "") {
        document.getElementById("f_fin_error").innerHTML = "La fecha de fin es obligatoria";
        interruptor = 1;
    }
    else {
        if (f_fin_javascript <= f_hoy_javascript) {
            document.getElementById("f_fin_error").innerHTML = "La fecha de fin no puede ser anterior a la actual";
            interruptor = 1;
        }
        else if (f_fin_javascript < f_inicio_javascript) {
            document.getElementById("f_fin_error").innerHTML = "La fecha de fin no puede ser anterior a la fecha de inicio";
            interruptor = 1;
        }
        else {
            document.getElementById("f_fin_error").innerHTML = "";
        }
    }

    precio = document.getElementById("precio").value.trim();
    if (precio == "") {
        document.getElementById("precio_error").innerHTML = "El precio es obligatorio";
        interruptor = 1;
    }
    else {

        if (precio <= 0) {
            document.getElementById("precio_error").innerHTML = "El precio debe ser mayor que cero";
            interruptor = 1;
        }
        else {
            document.getElementById("precio_error").innerHTML = "";
        }

    }

    max_participantes = document.getElementById("max_participantes").value.trim();
    if (max_participantes == "") {
        document.getElementById("max_participantes_error").innerHTML = "El numero de participantes es obligatorio";
        interruptor = 1;
    }
    else {

        if (max_participantes <= 0) {
            document.getElementById("max_participantes_error").innerHTML = "El numero de participantes debe ser mayor que cero";
            interruptor = 1;
        }
        else {
            document.getElementById("max_participantes_error").innerHTML = "";
        }

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

        document.getElementById("formularioInsertarServicio").submit();

    }



}

function validaEditarServicio(id,editor) {
    let interruptor = 0;
    nombre = document.getElementById("nombre" + id).value.trim();
    if (nombre == "") {
        document.getElementById("nombre_error" + id).innerHTML = "El nombre el obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("nombre_error" + id).innerHTML = "";
    }

    descripcion = editor.getData().trim();
    if (descripcion == "") {
        document.getElementById("descripcion_error" + id).innerHTML = "La descripcion es obligatoria";
        interruptor = 1;
    }
    else {
        document.getElementById("descripcion_error" + id).innerHTML = "";
    }
    var f_hoy = new Date();
    var dia = f_hoy.getDate();
    var mes = f_hoy.getMonth() + 1;
    var anio = f_hoy.getFullYear();

    var f_hoy = anio + "/" + mes + "/" + dia;
    var f_hoy_javascript = Date.parse(f_hoy);

    f_inicio = document.getElementById("f_inicio" + id).value.trim();
    var f_inicio_javascript = Date.parse(f_inicio);
    if (f_inicio == "") {
        document.getElementById("f_inicio_error" + id).innerHTML = "La fecha de inicio es obligatoria";
        interruptor = 1;
    }
    else {
        if (f_inicio_javascript <= f_hoy_javascript) {
            document.getElementById("f_inicio_error" + id).innerHTML = "La fecha de inicio no puede ser anterior a la actual";
            interruptor = 1;
        }
        else {
            document.getElementById("f_inicio_error" + id).innerHTML = "";
        }
    }



    f_fin = document.getElementById("f_fin" + id).value.trim();
    var f_fin_javascript = Date.parse(f_fin);

    if (f_fin == "") {
        document.getElementById("f_fin_error" + id).innerHTML = "La fecha de fin es obligatoria";
        interruptor = 1;
    }
    else {
        if (f_fin_javascript <= f_hoy_javascript) {
            document.getElementById("f_fin_error" + id).innerHTML = "La fecha de fin no puede ser anterior a la actual";
            interruptor = 1;
        }
        else if (f_fin_javascript < f_inicio_javascript) {
            document.getElementById("f_fin_error" + id).innerHTML = "La fecha de fin no puede ser anterior a la fecha de inicio";
            interruptor = 1;
        }
        else {
            document.getElementById("f_fin_error" + id).innerHTML = "";
        }
    }

    precio = document.getElementById("precio" + id).value.trim();
    if (precio == "") {
        document.getElementById("precio_error" + id).innerHTML = "El precio es obligatorio";
        interruptor = 1;
    }
    else {

        if (precio <= 0) {
            document.getElementById("precio_error" + id).innerHTML = "El precio debe ser mayor que cero";
            interruptor = 1;
        }
        else {
            document.getElementById("precio_error" + id).innerHTML = "";
        }

    }

    max_participantes = document.getElementById("max_participantes" + id).value.trim();
    if (max_participantes == "") {
        document.getElementById("max_participantes_error" + id).innerHTML = "El numero de participantes es obligatorio";
        interruptor = 1;
    }
    else {

        if (max_participantes <= 0) {
            document.getElementById("max_participantes_error" + id).innerHTML = "El numero de participantes debe ser mayor que cero";
            interruptor = 1;
        }
        else {
            document.getElementById("max_participantes_error" + id).innerHTML = "";
        }

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

        document.getElementById("formularioEditarServicio" + id).submit();

    }



}

function validaEliminarServicio(id) {

    form = document.getElementById("#formularioEliminarServicio" + id);

    Swal.fire({
        title: 'Quieres borrar este servicio?',
        text: "Se borraran todos los registros relacionados con el servicios (inscripciones al servicio y los registros de los empleados a cargo) ,este cambio no podra revertirse ",
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

    imagen = document.getElementById("imagen").value.trim();

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

    form = document.getElementById("#formularioEliminarPublicacion" + id);

    Swal.fire({
        title: 'Quieres borrar esta publicacion?',
        text: "Se borraran todos los registros relacionados con la publicacion ( comentarios y autorias de la publicacion ) ,este cambio no podra revertirse ",
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

// -------------------------- CRUD NIVELES ----------------------------------------------------

function validaInsertarNivel() {
    let interruptor = 0;
    nombre = document.getElementById("nombre").value.trim();
    if (nombre == "") {
        document.getElementById("nombre_error").innerHTML = "El nombre del nivel es obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("nombre_error").innerHTML = "";
    }

    valor = document.getElementById("valor").value.trim();
    if (valor == "") {
        document.getElementById("valor_error").innerHTML = "El valor del nivel es obligatorio";
        interruptor = 1;
    }
    else if(valor <=0)
    {
        document.getElementById("valor_error").innerHTML = "El valor debe ser mayor que cero";
        interruptor = 1;   
    }
    else {
        document.getElementById("valor_error").innerHTML = "";
    }

    if (interruptor == 0) {

        
        var xmlhttp = getXMLHTTPRequest();
        var url = "views/js/scripts/validaInsertarNivel.php";
        // se abre la conexión con el servidor
        xmlhttp.open("POST", url);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = respuestaServidor;
        xmlhttp.send("valor=" + valor + "&nombre=" + nombre);

        // Creamos la función que hace de gestor de evento
        function respuestaServidor() {
            // comprobamos si el estado es "completado"
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {

                    if (xmlhttp.responseText == 1) {
                        document.getElementById("nombre_error").innerHTML = "Ya hay un nivel registrado con ese nombre";
                        document.getElementById("valor_error").innerHTML = "";

                    }
                    else if (xmlhttp.responseText == 2) {
                        document.getElementById("valor_error").innerHTML = "Ya hay un nivel registrado con ese valor";
                        document.getElementById("nombre_error").innerHTML = "";
                    }
                    else if (xmlhttp.responseText == 3) {
                        document.getElementById("nombre_error").innerHTML = "Ya hay un nivel registrado con ese nombre";
                        document.getElementById("valor_error").innerHTML = "Ya hay un nivel registrado con ese valor";
                    }
                    else {
                        document.getElementById("valor_error").innerHTML = "";
                        document.getElementById("nombre_error").innerHTML = "";
                        document.getElementById("formularioInsertarNivel").submit();

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

function validaEditarNivel(id) {
    let interruptor = 0;
    nombre = document.getElementById("nombre" + id).value.trim();
    if (nombre == "") {
        document.getElementById("nombre_error" + id).innerHTML = "El nombre del nivel es obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("nombre_error" + id).innerHTML = "";
    }

    valor = document.getElementById("valor"  + id).value.trim();
    if (valor == "") {
        document.getElementById("valor_error"  + id).innerHTML = "El valor del nivel es obligatorio";
        interruptor = 1;
    }
    else if(valor <=0)
    {
        document.getElementById("valor_error"  + id).innerHTML = "El valor debe ser mayor que cero";
        interruptor = 1;   
    }
    else {
        document.getElementById("valor_error"  + id).innerHTML = "";
    }

    if (interruptor == 0) {


        // -------------------- EJECUCION DE UN ARCHIVO PHP PARA HACE RUNA CONSULTA A LA BASE DE DATOS -----------------------------
        // -------------------- Consulta para comprobar la disponibilidad del correo y del dni -----------------------------------------------

        var xmlhttp = getXMLHTTPRequest();
        var url = "views/js/scripts/validaEditarNivel.php";
        // se abre la conexión con el servidor
        xmlhttp.open("POST", url);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = respuestaServidor;
        xmlhttp.send("valor=" + valor + "&nombre=" + nombre + "&id=" + id);

        // Creamos la función que hace de gestor de evento
        function respuestaServidor() {
            // comprobamos si el estado es "completado"
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {
                    if (xmlhttp.responseText == 1) {
                        document.getElementById("nombre_error" + id).innerHTML = "Ya hay un nivel registrado con ese nombre";
                        document.getElementById("valor_error" + id).innerHTML = "";

                    }
                    else if (xmlhttp.responseText == 2) {
                        document.getElementById("valor_error" + id).innerHTML = "Ya hay un nivel registrado con ese valor";
                        document.getElementById("nombre_error" + id).innerHTML = "";
                    }
                    else if (xmlhttp.responseText == 3) {
                        document.getElementById("nombre_error" + id).innerHTML = "Ya hay un nivel registrado con ese nombre";
                        document.getElementById("valor_error" + id).innerHTML = "Ya hay un nivel registrado con ese valor";
                    }
                    else {
                        document.getElementById("valor_error" + id).innerHTML = "";
                        document.getElementById("nombre_error" + id).innerHTML = "";
                        document.getElementById("formularioEditarNivel" + id).submit();

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

function validaEliminarNivel(id) {

    form = document.getElementById("formularioEliminarNivel" + id);

    Swal.fire({
        title: 'Quieres borrar este nivel?',
        text: "Se borraran todos los registros relacionados con el nivel ( servicios y usuarios ) ,este cambio no podra revertirse ",
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


// -------------------------- CRUD CATEGORIAS----------------------------------------------------
function validaInsertarCategoria() {
    let interruptor = 0;
    nombre = document.getElementById("nombre").value.trim();
    if (nombre == "") {
        document.getElementById("nombre_error").innerHTML = "El nombre de la categoria es obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("nombre_error").innerHTML = "";
    }

    imagen = document.getElementById("imagen").value.trim();

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

        document.getElementById("formularioInsertarCategoria").submit();

    }



}

function validaEditarCategoria(id) {
    let interruptor = 0;
    let nombre = document.getElementById("nombre" + id).value.trim();
    if (nombre == "") {
        document.getElementById("nombre_error" + id).innerHTML = "El nombre de la categoria es obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("nombre_error" + id).innerHTML = "";
    }

    let imagen = document.getElementById("imagen" + id).value.trim();

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

        document.getElementById("formularioEditarCategoria" + id).submit();

    }



}

function validaEliminarCategoria(id) {

    form = document.getElementById("formularioEliminarCategoria" + id);

    Swal.fire({
        title: 'Quieres borrar esta categoria?',
        text: "Se borraran todos los registros relacionados con la categoria (servicios y publicaciones ) ,este cambio no podra revertirse ",
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

// -------------------------- CRUD NOTIFICACIONES ----------------------------------------------------
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

        document.getElementById("formularioMandarNotificacion").submit();

    }




}

function validaEditarNotificacion(id,editor) {
    let interruptor = 0;
    mensaje = editor.getData().trim();
    if (mensaje == "" || mensaje == " ") {
        document.getElementById("mensaje_error" + id).innerHTML = "El mensaje es obligatorio";
        interruptor = 1;
    }
    else {
        document.getElementById("mensaje_error" + id).innerHTML = "";
    }

    if (interruptor == 0) {

        document.getElementById("formularioEditarNotificacion" + id).submit();

    }



}

function validaEliminarNotificacion(id) {

    form = document.getElementById("formularioEliminarNotificacion" + id);

    Swal.fire({
        title: 'Quieres borrar esta notificacion?',
        text: "Se borraran todos los registros relacionados con la notificacion (notificaciones de clientes y empleados ) ,este cambio no podra revertirse ",
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

// -------------------------- CRUD COMENTARIOS ----------------------------------------------------

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



