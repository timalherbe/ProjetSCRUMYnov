<?php
require('vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST)) {
    $mail = htmlspecialchars($_POST['mail']);
    $msg = htmlspecialchars($_POST['message']);
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "netpune.world@gmail.com";
    $mail->Password = "L/123456789";
    $mail->Password = "L/123456789";
    try {
//Set who the message is to be sent from
        $mail->setFrom($_POST['mail'], $_POST['fullname']);
//Set an alternative reply-to address
        $mail->addReplyTo($_POST['mail'],  $_POST['fullname']);
//Set who the message is to be sent to
        $mail->addAddress('netpune.world@gmail.com');
//Set the subject line
        $mail->Subject = 'retour';
        $mail->Body = $_POST['message'];
        $result = $mail->send();
        if(!$mail->send()) {
            echo 'Erreur, message non envoyé.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Le message a bien été envoyé !';
        }
    }


    catch (Exception $e) {


    }
    header("Location: index.php?req=".$nbInsert);
}
?>