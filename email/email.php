<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jorgedam04dev@gmail.com';                     //SMTP username
    $mail->Password   = 'Dev04jorgedam';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('jorgedam04dev@gmail.com', 'Dev');
    $mail->addAddress('jorge.agustin.deaquino@gmail.com', 'Usuario Spa Dental');     //Add a recipient
    

    //Attachments  PARA ENVIAR ARCHIVOS ADJUNTOS
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperar contraseña';
    $mail->Body    = 'Hola usuario, la contraseña es:';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; mensaje alternativo

    $mail->send();
    echo 'El mensaje se envió correctamente.';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
}