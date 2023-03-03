<?php
	// declaration des variables
	$name=isset($_POST['nom'])? $_POST['nom'] : "";
	$firstname=isset($_POST['prenom'])? $_POST['prenom'] : "";
	$adress=isset($_POST['adresse'])? $_POST['adresse'] : "";
	$city=isset($_POST['ville'])? $_POST['ville'] : "";
	$cp=isset($_POST['codePostal'])? $_POST['codePostal'] : "";
	$country=isset($_POST['pays'])? $_POST['pays'] : "";
	$phone=isset($_POST['telephone'])? $_POST['telephone'] : "";

	$erreur ="";

	 if($name==""){
	 	$erreur.="Le champ nom est vide. <br>";
	 }
	 if($firstname==""){
	 	$erreur.="Le champ prénom est vide. <br>";
	 }
	 if($adress==""){
	 	$erreur.="Le champ adresse est vide. <br>";
	 }
	 if($city==""){
	 	$erreur.="Le champ ville est vide. <br>";
	 }
	 if($cp==""){
     	 	$erreur.="Le champ code postal est vide. <br>";
     }
     if($country==""){
            $erreur.="Le champ pays est vide. <br>";
     }
     if($phone==""){
           $erreur.="Le champ téléphone est vide. <br>";
     }

	 if($erreur==""){
	 	echo "Formulaire valide";
	 }
	 else{
	 	echo "Erreur : <br>".$erreur;
	 }
?>