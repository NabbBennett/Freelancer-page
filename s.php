<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tucorreo@gmail.com';
    $mail->Password = 'tu_contraseña_de_app';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('tucorreo@gmail.com', 'Mi Web');
    $mail->addAddress('tucorreo@gmail.com');

    $mail->Subject = 'Nuevo mensaje desde tu web';
    $mail->Body    = "Nombre: $nombre\nCorreo: $email\nMensaje: $mensaje";

    $mail->send();
    echo 'Mensaje enviado correctamente';
} catch (Exception $e) {
    echo "Error al enviar mensaje: {$mail->ErrorInfo}";
}
