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
    $mail->Subject = "Proposition d'enseignants et répétiteurs";
    $mail->Body    = "<p>Bonjour Mr $nom,</p><br><p>Nous vous remercions pour la confiance que vous accordez à notre structure. EDUGATE est une plateforme numérique<br>
    d'apprentissage et de renforcement des capacités destinée aux élèves du secondaire afin de leur permettre non seulement<br>
    d'assimiler les notions clés du programme en vigueur mais aussi de préparer et réussir les examens BEPC et le BAC. La<br>
    plateforme d'apprentissage en ligne est enrichie de cours vidéo de haute qualité et certifiés, dispensés par des enseignants de<br>
    renom, qui peuvent être visualisés à tout moment et ce, à partir de n'importe quel appareil.</p><br><p>Vous trouverez ci-dessous le lien en rapport avec le profil d’enseignants et répétiteurs qualifies pour<br>
    laccompagner votre enfants. Veuillez effectuer votre selection.<br>- Proposition 1 : $proposition1<br>
    - Proposition 2 : $proposition2<br>
    - Proposition 3 : $proposition3</p>";
    $mail->AltBody = '';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}