<?php
//Load Composer's autoloader

require '../../public/PHPMailer/PHPMailer/class.phpmailer.php';
require '../../public/PHPMailer/PHPMailer/class.smtp.php';
require '../../public/PHPMailer/PHPMailer/PHPMailerAutoload.php';



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mauclaire00@gmail.com';                     //SMTP username
    $mail->Password   = 'Avenger1992!';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;
                                         //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mauclaire00@gmail.com', 'Edugate');
    $mail->addAddress($email);     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "La prochaine étape";
    $mail->Body    = "<p>Bonjour Mr le Prof de $matiere</p><br><p>Mr $nom souhaite avoir une séance de conseil avec vous! Ci-dessous vous trouverez le contenu de son message.<br>
    MESSAGE PARENT: $message<br></p><br><p>Meilleures salutations,<br>
    Votre équipe EDUGATE</p>";
    $mail->AltBody = '';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}