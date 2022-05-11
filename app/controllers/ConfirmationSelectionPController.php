<?php


//Create an instance; passing `true` enables exceptions
$mail2 = new PHPMailer(true);
$mail2->CharSet = 'UTF-8';

try {
    //Server settings
    $mail2->isSMTP();                                            //Send using SMTP
    $mail2->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail2->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail2->Username   = 'mauclaire00@gmail.com';                     //SMTP username
    $mail2->Password   = 'Avenger1992!';                               //SMTP password
    $mail2->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail2->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail2->setFrom('mauclaire00@gmail.com', 'Edugate');
    $mail2->addAddress($emailPf);     //Add a recipient


    //Content
    $mail2->isHTML(true);                                  //Set email format to HTML
    $mail2->Subject = 'Sollicitation';
    $mail2->Body    = "<p>Monsieur $nomdemande vous sollicite pour des cours vous trouver ci-dessous son mail et son numero:<br>$emailP<br>$numerodemande<br>Bien cordialement,<br>Votre équipe EDUGATE</p>";
    $mail2->AltBody = 'Nous avons recu votre choix et l\'enseignant a recu votre demande il vous contactera sous peu. Bien cordialement,Votre équipe EDUGATE';

    $mail2->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail2->ErrorInfo}";
}