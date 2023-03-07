<?php
// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$commentaire = $_POST['commentaire'];

// Construction de l'e-mail
$destinataire = 'julie.legrand@edu.ece.fr';
$sujet = 'Nouveau message de formulaire de contact';
$message = "Nom : $nom\n\nPrénom : $prenom\n\nCommentaire :\n$commentaire";

// Envoi de l'e-mail
mail($destinataire, $sujet, $message);

// Redirection vers la page de confirmation
header('Location: confirmation.html');
?>