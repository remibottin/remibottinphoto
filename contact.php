<?php
$nom=$HTTP_POST_VARS['nom'];
$mail=$HTTP_POST_VARS['mail'];
$objet=$HTTP_POST_VARS['objet'];
$message=$HTTP_POST_VARS['message'];

$headers = "MIME-Version: 1.0\r\n";

//////mail and text format
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

////exp and response
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP";

$subject="$objet";
$destinataire="remibottin12@gmail.com"; // mon mail
$body="$message";
if (mail($destinataire,$subject,$body,$headers)) {
echo "Votre mail a été envoyé<br>";
} else {
echo "Une erreur s'est produite";
}
?></p>
<p align="center">You are going be redirected automaticaly<br>
If not, click here: <a href="work.html">ici
</a></p>
