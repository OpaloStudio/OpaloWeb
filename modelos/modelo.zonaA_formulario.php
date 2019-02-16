<?php

require('../vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$status = '999';

$idNombre = $_POST['idNombre'];
$idCorreo = $_POST['idCorreo'];
$idCompany = $_POST['idCompany'];
//$emailAgenda = $_POST['emailAgenda'];
//$fechaAgenda = $_POST['fechaAgenda'];
//$nombreAgenda = $_POST['nombreAgenda'];
//$telefonoAgenda = $_POST['telefonoAgenda'];
//$nombreDestino = $_POST['nombreDestino'];

$mail = new PHPMailer(true);
try {

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail -> CharSet = "UTF-8";
    $mail->Host = 'mail.opalo.studio';
    $mail->SMTPAuth = true;
    $mail->Username = 'hola@opalo.studio';
    $mail->Password = '.pinshicontraseña';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;  

    $mail->setFrom('hola@opalo.studio', 'Ópalo Studio');

    $mail->addAddress($idCorreo, $idNombre);

    //$mail->addReplyTo($emailAgenda, $nombreDestino);

    $mail->isHTML(true);
    $mail->Subject = '"'.$tituloPublicacion.'" Cotización';
    $mail->Body    = '<h4>Hola '.$nombreDestino.'</h4><p>La publicación "'.$tituloPublicacion.'" tiene una cita agendada para el día '.$fechaAgenda.', responde a este correo o comunícate al '.$telefonoAgenda.' para confirmar la cita y contactar al interesado.</p>';
    $mail->AltBody = 'Hola '.$nombreDestino.', la publicación "'.$tituloPublicacion.'" tiene una cita agendada para el día '.$fechaAgenda.', responde a este correo o comunícate al '.$telefonoAgenda.' para confirmar la cita y contactar al interesado.';

    if($mail->send())
        $status = '1';
} catch (Exception $e) {
    $status = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
}

echo $status;

?>