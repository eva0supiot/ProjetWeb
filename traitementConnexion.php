<?php
	// declaration des variables
	$email=isset($_POST['mail'])? $_POST['mail'] : "";
	$password=isset($_POST['mdp'])? $_POST['mdp'] : "";
	$password2=isset($_POST['motDePasse'])? $_POST['motDePasse'] : "";

	$erreur ="";

	 if($email==""){
	 	$erreur.="Le champ adresse mail est vide. <br>";
	 }
	 if($password==""){
	 	$erreur.="Le champ mot de passe est vide. <br>";
	 }
	 if($password2==""){
     	 	$erreur.="Veuillez confimer le mot de passe <br>";
     }

	 if($erreur=="")
	 {
	    echo "Formulaire valide";
	    if($password==$password2)
            {
                echo "Connexion réussi";
            }
            else{
                echo "Les mots de passe sont différents";
            }
	 }
	 else
	 	echo "Erreur : <br>".$erreur;
?>