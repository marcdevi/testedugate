<?php
//Load Composer's autoloader

require '../../public/PHPMailer/PHPMailer/class.phpmailer.php';
require '../../public/PHPMailer/PHPMailer/class.smtp.php';
require '../../public/PHPMailer/PHPMailer/PHPMailerAutoload.php';



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mauclaire00@gmail.com';                     //SMTP username
    $mail->Password   = 'Avenger1992!';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mauclaire00@gmail.com', 'Edugate');
    $mail->addAddress($email);     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "La prochaine étape";
    $mail->Body    = "<p>Bonjour $nom</p><br><p>Nous sommes ravis que vous souhaitiez faire partie de la communauté EDUGATE! Nous avons trouvé votre CV intéressant et<br>
    avons décidé de poursuivre avec votre candidature.<br>
    Dans l'étape suivante, il vous incombe de passer un test d'entrée pour les matières dans lesquelles vous souhaitez dispenser<br>
    les cours particuliers. Nous supposons que vous pouvez enseigner les matières que vous avez spécifiées dans votre<br>
    candidature jusqu'à la classe de Terminale. Vous trouverez ci-dessous les liens vers les tests d'entrée - veuillez ne passer que<br>
    les tests que vous pouvez enseigner:</p><br><a href=\"page-test-francais.php\" target=\"_blank\">Francais</a><br><a href=\"page-test-Anglais.php\" target=\"_blank\">Anglais</a><br><a href=\"page-test-allemand.php\" target=\"_blank\">Allemand</a><br><a href=\"page-test-espagnole.php\" target=\"_blank\">Espagnole</a><br><a href=\"page-test-histoire-geo.php\" target=\"_blank\">Histoire-géo</a><br><a href=\"page-test-mathematiques.php\" target=\"_blank\">Mathématiques</a><br><a href=\"page-test-physique-chimie.php\" target=\"_blank\">Physique-chimie</a><br><a href=\"page-test-svt.php\" target=\"_blank\">SVT</a><br><a href=\"page-test-philosophie.php\" target=\"_blank\">Philosophie</a>
    <p>Veuillez terminer les tests dans les 5 prochains jours ! Vous n'avez qu'un seul essai à la fois. La répétition des tests sera<br>
    considérée comme une tentative de tricherie et entraînera le rejet de votre candidature.</p><br><p>Si la matière que vous souhaitez enseigner ne figure pas parmi les boutons bleus, veuillez nous indiquer pourquoi vous<br>
    pourriez être un bon tuteur. Nous attendons avec impatience un court e-mail dans lequel vous nous direz pourquoi vous<br>
    pensez pouvoir enseigner la matière jusqu'à la classe de Terminale!</p><br><p>Après avoir réussi au moins un test, vous aurez la possibilité de vous inscrire comme Enseignant ou tuteur sur EDUGATE.<br>
    Nous vous souhaitons du succès!<br>
    Meilleures salutations,<br>
    Votre équipe EDUGATE</p>";
    $mail->AltBody = '';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}