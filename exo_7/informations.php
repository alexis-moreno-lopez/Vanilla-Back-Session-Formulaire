<?php

//MA PAGE INFORMATIONS.PHP qui récupère les informations de mon formulaire//

// $_POST est une variable superglobale qui récupère les données du formulaire envoyé en méthode POST
$prenom = $_GET['prenom']; // prenom est le name de l'input du formulaire//

$nom = $_GET['nom'];

//  $_GET est une variable superglobale qui récupère les données du formulaire envoyé en méthode GET
//  DONC $_GET si votre formulaire utilise la méthode GET et $_POST si votre formulaire utilise la méthode POST

echo $prenom . " " . $nom;




?>



