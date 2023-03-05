<?php
	// declaration des variables
	$email=isset($_POST['mail'])? $_POST['mail'] : "";
	$password=isset($_POST['mdp'])? $_POST['mdp'] : "";

	$erreur ="";

	 if($email==""){
	 	$erreur.="Le champ adresse mail est vide. <br>";
	 }
	 if($password==""){
	 	$erreur.="Le champ mot de passe est vide. <br>";
	 }?>

	 <?php if($erreur==""):?>
	 	<h1>Formulaire Valide</h1>

	 <?php
	 else:
	 	echo "Erreur : <br>".$erreur;
	 endif;
?>