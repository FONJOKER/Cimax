<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'views/mail2/src/Exception.php';
require 'views/mail2/src/PHPMailer.php';
require 'views/mail2/src/SMTP.php';


// ENVIO DEL CORREO ELECTRONICO

$mail = new PHPMailer(); // Se crea el objeto

if(isset($_POST) && sizeof($_POST)>0)
{
    $mail->isSMTP();

    $mail->Host = "sandbox.smtp.mailtrap.io"; // Se indica el host desde el cual se env�a el email

    $mail->SMTPAuth = true;

    $mail->Port = 2525;

    $mail->Username = 'f4fff40a8d8081';

    $mail->Password = 'b8cf36d73bf2cb';
            
    $mail->From = $_POST["email"]; //Remitente

    $mail->FromName = $_POST["nombre"]; //Nombre del remitente

    $mail->Subject = $_POST["asunto"]; //Asunto del email

    $mail->AddAddress("julian.fagadau@gmail.com", "Contacto Cimax"); // Destino

    $mail->CharSet = 'UTF-8';

    //  MENSAJE FORMATEADO
    $mensaje = '
    <div style="width: 40vw; margin-right: 60vw;">
        <h1 style="text-align:center;">Contacto desde  <span style="color: #959595;">C</span><span>IMA</span><span style="color: #84AB3D;">X</span></h1>
        <hr style="color: #84AB3D; height: 3px; background-color: #84AB3D;">
        <div style="padding: 25px;">
            <table>
                <tr>
                    <th style="text-align: start; width: 75px ;padding: 16px;">Nombre</th>
                    <td style="color: #959595;">'.$_POST["nombre"].'</td>
                </tr>
                <tr>
                    <th style="text-align: start; width: 75px ;padding: 16px;">Email</th>
                    <td style="color: #959595;">'.$_POST["email"].'</td>
                </tr>
                <tr>
                    <th style="text-align: start; width: 75px ;padding: 16px;">Telefono</th>
                    <td style="color: #959595;">'.$_POST["telefono"].'</td>
                </tr>
                <tr>
                    <th style="text-align: start; width: 75px ;padding: 16px;">Asunto</th>
                    <td style="color: #959595;">'.$_POST["asunto"].'</td>
                </tr>
                <tr>
                    <th style="text-align: start; width: 75px ;padding: 16px;">Mensaje</th>
                    <td style="color: #959595;">'.$_POST["mensaje"].'</td>
                </tr>
            </table>   
        </div>
    </div>
    ';
    $mail->MsgHTML($mensaje); //Mensaje en HTML
    $mail->IsHTML(true); // para que el mensaje coja formato html


    // ALERT DE CONFIRMACION
    if($mail->Send())
    {
        echo "<script> 
                Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'En breve te responderemos',
                showConfirmButton: false,
                timer: 1500
                });
                </script>";
    }
}


include_once("views/partials/contacto.view.php");