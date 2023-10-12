<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['telephone'];
$objet = $_POST['objet'];
$mail = $_POST['mail'];


$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$total_contenu =  "<html>Nom : $nom <br> Prénom : $prenom <br> Téléphone : $tel <br> Mail : $mail <br> Objet : $objet </html>" ;


mail("dlsgroup26@gmail.com", $objet, $total_contenu, implode("\r\n", $headers));


echo "<script>window.location = 'http://location-mur-de-led.com/index.html' </script>";


?>