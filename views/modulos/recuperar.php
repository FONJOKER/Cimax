<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include("controllers/UsuariosController.php");
require 'views/mail2/src/Exception.php';
require 'views/mail2/src/PHPMailer.php';
require 'views/mail2/src/SMTP.php';
$mail = new PHPMailer(); // Se crea el objeto

$funciones = new FuncionesController;

$usuarios_model = new UsuariosController;

// ENVIO DEL MESAJE CON UNA NUEVA CONTRASEÑA

if (isset($_POST) && sizeof($_POST) > 0) {
    $password = $funciones->ctrGeneraCadena();
    $datos["pass"] = $funciones->ctrCifrar($password);
    $usuarios_model->ctrEditarRegistros($datos, "email", $_POST["email"]);

    $mail->isSMTP();

    $mail->Host = "sandbox.smtp.mailtrap.io"; // Se indica el host desde el cual se env�a el email

    $mail->SMTPAuth = true;

    $mail->Port = 2525;

    $mail->Username = 'f4fff40a8d8081';

    $mail->Password = 'b8cf36d73bf2cb';

    $mail->From = "administracion@cimax.com"; //Remitente

    $mail->FromName = "Administrador de la Web"; //Nombre del remitente

    $mail->Subject = "Recuperar contraseña"; //Asunto del email

    $mail->AddAddress( $_POST["email"], "Estimado Cliente"); // Destino
    
    $mail->CharSet = 'UTF-8';

    // MENSAJE FORMATEADO
    $mensaje = '
    <div style="width: 40vw; margin-right: 60vw;">
        <h1 style="text-align:center;">Contacto desde  <span style="color: #959595;">C</span><span>IMA</span><span style="color: #84AB3D;">X</span></h1>
        <hr style="color: #84AB3D; height: 3px; background-color: #84AB3D;">
        <div style="padding: 25px;">
            <table>
                <tr>
                    <th style="text-align: start; width: 75px ;padding: 16px;">Email</th>
                    <td style="color: #959595;">' . $_POST["email"] . '</td>
                </tr>
                <tr>
                    <th style="text-align: start; width: 75px ;padding: 16px;">Asunto</th>
                    <td style="color: #959595;">Recuperar contraseña</td>
                </tr>
                <tr>
                    <th style="text-align: start; width: 75px ;padding: 16px;">Mensaje</th>
                    <td style="color: #959595;">Se te ha generado una nueva contraseña para tu perfil, accede a la pagina web al apartado de tu perfil para cambiarla a la contraseña que desees</td>
                </tr>
                <tr>
                    <th style="text-align: start; width: 75px ;padding: 16px;">Nueva Contraseña</th>
                    <td style="color: #959595;">' . $password . '</td>
                </tr>
            </table>   
        </div>
    </div>
    ';
    $mail->MsgHTML($mensaje); //Mensaje en HTML
    $mail->IsHTML(true); // para que el mensaje coja formato html


    // ALERTA DE CONFIRMACION
    if ($mail->Send()) {
        echo "<script> 
                Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Revisa tu correo electronico',
                showConfirmButton: false,
                timer: 1500
                });
                </script>";
    }
}


include_once("views/partials/recuperar.view.php");
