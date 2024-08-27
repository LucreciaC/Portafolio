<?php
// Capturar los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Incluir los archivos de PHPMailer
require '../vendor/PHPMailer/PHPMailer.php';
require '../vendor/PHPMailer/SMTP.php';
require '../vendor/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->SMTPDebug = 0;                      // Desactiva el modo de depuración
    $mail->isSMTP();                          // Usa SMTP
    $mail->Host = 'smtp.gmail.com';           // Servidor SMTP de Gmail
    $mail->SMTPAuth = true;                   // Habilita autenticación SMTP
    $mail->Username = 'lucre252@gmail.com';   // Tu correo electrónico de Gmail
    $mail->Password = 'nusf tcgh uhnj eopg';  // Tu contraseña de Gmail (asegúrate de que es la correcta)
    $mail->SMTPSecure = 'tls';                // Habilita el cifrado TLS
    $mail->Port = 587;                        // Puerto TCP para TLS (587) o SSL (465)

    // Configuración del correo
    $mail->setFrom($email, $name);            // El correo del remitente (el usuario que llena el formulario)
    $mail->addAddress('lucre252@gmail.com');  // Tu correo (donde recibirás el mensaje)
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje de contacto desde el portafolio';
    $mail->Body    = "
        <h2>Nuevo mensaje de contacto</h2>
        <p><strong>Nombre:</strong> $name</p>
        <p><strong>Correo Electrónico:</strong> $email</p>
        <p><strong>Mensaje:</strong><br>$message</p>
    ";

    // Enviar el correo
    $mail->send();
    echo '<div class="alert alert-success col-12 col-md-6 m-auto">El mensaje ha sido enviado correctamente.</div>';
} catch (Exception $e) {
    echo '<div class="alert alert-danger col-12 col-md-6 m-auto">Error: ' . $mail->ErrorInfo . '</div>';
}
?>


